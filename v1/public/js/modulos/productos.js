

var panel_respuesta = $("#respuesta-request").hide();
var tbody_tabla = $('#tbody-productos');


//OBTIENE TODOS LOS PRODUCTOS


$.get(url + 'productos/obtenerTodo/', function(response) {
	let respuesta = JSON.parse(response);

	let template = '';
	//console.log(response);

	respuesta.forEach(element => {

		let url_api = url+"productos/eliminar/" + element.idproductos;

		template+= 
			`
			<tr idProductos="${element.idproductos}" id= "fila-${element.idproductos}">
			  <td>${element.nombre}</td>
			  <td>${element.stock}</td>
			  <td>${"$ " + element.precioCosto}</td>
		      <td>${"$ " + element.precioVenta}</td>
		      <td>${element.descripcion}</td>
		      <td>
		        <button type="button" class="delete_productos btn btn-danger fas fa-trash-alt">
		         </button>
		      </td>
              <td><button  id="btn-agregar" class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
			</tr>
			`
	});
		
	$(tbody_tabla).html(template);

});


//INSERTA UN PRODUCTO NUEVO

$(document).ready(function() {

    $("#dataForm").on("submit", function(e){
        e.preventDefault();

    	var data = {
            "nombre":$('#nombre').val(),
            "precioCosto":$('#precioCosto').val(),
            "precioVenta":$('#precioVenta').val(),
            "descripcion":$('#descripcion').val(),
            "stock":$('#stock').val()
        }

        $.post(url+"productos/insertar/", {data}, function(result, status, a){
            if (result == "exito") {
            	let template = 
            `
                <div class="alert alert-success " role="alert">
                  Producto Registrado
                </div>
            `;
              $(panel_respuesta).html(template);
              $(panel_respuesta).show();
              $(panel_respuesta).fadeOut(6000);  
              console.log(result);
            }

        $('#dataForm').trigger("reset")            
	    });
    });
});
 

//elimina un registro

$(document).on('click', '.delete_productos', function(){

	let element = $(this)[0].parentElement.parentElement;
	let id = $(element).attr('idProductos');

	fetch(url+'productos/eliminar/' + id, {
      method: 'DELETE',
    })
    .then(function(data) {
      let template = 
		    `
          <div class="alert alert-success " role="alert">
            registro eliminado
          </div>
        `;		           		    
		$(panel_respuesta).html(template);
		$(panel_respuesta).show();
		$(panel_respuesta).fadeOut(6000);

    const tbody = document.querySelector("#tbody-productos");
		const fila  = document.querySelector("#fila-"+id);
		tbody.removeChild(fila);
    });
  ;
	
	
});


