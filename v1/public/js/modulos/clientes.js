var panel_respuesta = $("#respuesta-request").hide();
var tbody_tabla = $('#tbody-clientes');


get_clientes();

//OBTIENE TODOS LOS EMPLEADOS
function get_clientes(){

  $.get(url + 'clientes/obtenerTodo/', function(response) {

	let respuesta = JSON.parse(response);
  console.log();

	let template = '';

	respuesta.forEach(element => {

		let url_api = url+"clientes/eliminar/" + element.idcliente;

		template+= 
			`
			<tr idClientes="${element.idcliente}" id= "fila-${element.idcliente}">
			  <td>${element.nombre + ' ' + element.apellido}</td>
			  <td>${element.empresa}</td>
		      <td>${element.celular}</td>
		      <td>${element.email}</td>
		      <td>
		        <button type="button" class="delete_cliente btn btn-danger fas fa-trash-alt"></button>
		      </td>
              <td><button  id="btn-agregar" class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
			</tr>
			`
        
	});
		
	$(tbody_tabla).html(template);
    

  });

}


//CARGA UN EMPLEADOS NUEVO

$(document).ready(function() {
    $("#dataForm").on("submit", function(event){
        event.preventDefault();
        
        var data = {
        	"empresa":$('#empresa').val(),
          "nombre":$('#nombre').val(),
          "apellido":$('#apellido').val(),
          "celular":$('#celular').val(),
          "email":$('#email').val()        
        }
        $.post(url+"clientes/insertar/", {data}, function(result, statusText, xhr){

            if (result == "exito") {
              let template = 
                `
                <div class="alert alert-success " role="alert">
                  cliente registrado
                </div>
                `;
              $(panel_respuesta).html(template);
              $(panel_respuesta).show();
              $(panel_respuesta).fadeOut(6000);            
            }

          $('#dataForm').trigger("reset");    
        });
        
    });
});


//elimina un registro

$(document).on('click', '.delete_cliente', function(){

	let element = $(this)[0].parentElement.parentElement;
	let id = $(element).attr('idclientes');

	fetch(url+'clientes/eliminar/' + id, {
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

    const tbody = document.querySelector("#tbody-clientes");
	  const fila  = document.querySelector("#fila-"+id);
	  tbody.removeChild(fila);
    });	
	
});

