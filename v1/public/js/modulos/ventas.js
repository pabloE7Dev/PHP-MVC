var panel_respuesta = $("#respuesta-request").hide();
var tbody_tabla = $('#tbody-ventas');


var array_lista_productos = []; 

get_ventas();
lista_clientes(); 
lista_productos();



        //////     VENTAS     //////       

//  Search

var buscador = document.getElementById('search');

buscador.onkeyup = function(){
	
	let search = $('#search').val();

	$.get(url + 'ventas/search/' + search, function(response) {
		   
		let respuesta = JSON.parse(response);
        console.log(response);

	    let template = '';

	    respuesta.forEach(element => {

		let url_api = url+"ventas/eliminar/" + element.idventa;

		template+= 
			`
			<tr idVenta="${element.idventa}" id= "fila-${element.idventa}"  class="border-top">
			  <td>${element.producto}</td>
			  <td>${element.fecha}</td>
		      <td>${element.cliente}</td>
		      <td>${element.total}</td>
		      <td>
		        <button type="button" class="delete_venta" style="background:white; outline:none; border:none; color: #B43D22;">X</button>
		      </td>      
			</tr>
			`
        });
        $(tbody_tabla).html(template);
	});

}		




//OBTIENE TODAS LAS VENTAS
function get_ventas(){

  $.get(url + 'ventas/obtenerVentas/', function(response) {

	let respuesta = JSON.parse(response);
    console.log(response);

	let template = '';

	respuesta.forEach(element => {

		let url_api = url+"ventas/eliminar/" + element.idventa;

		template+= 
			`
			<tr idVenta="${element.idventa}" id= "fila-${element.idventa}" class="border-top">
			  <td>${element.producto}</td>
			  <td>${element.fecha}</td>
		      <td>${element.cliente}</td>
		      <td>${element.total}</td>
		      <td>
		        <button type="button" class="delete_venta" style="background:white; outline:none; border:none; color: #B43D22;">X</button>
		      </td>      
			</tr>
			`
        
	});
		
	$(tbody_tabla).html(template);
    

  });

}


//elimina un registro

$(document).on('click', '.delete_venta', function(){

	let element = $(this)[0].parentElement.parentElement;
	let id = $(element).attr('idVenta');

	fetch(url+'ventas/eliminar/' + id, {
      method: 'DELETE',
    })
    .then(function(data) {
      let template = 
		`
          <div class="alert alert-success " role="alert">
            Venta cancelada
          </div>
        `;		           		    
	  $(panel_respuesta).html(template);
	  $(panel_respuesta).show();
	  $(panel_respuesta).fadeOut(6000);

      const tbody = document.querySelector("#tbody-ventas");
	  const fila  = document.querySelector("#fila-"+id);
	  tbody.removeChild(fila);
    });	
	
});








function lista_clientes(){ //OBTIENE LOS CLIENTES

  $.get(url + 'ventas/obtenerClientes/', function(response) {

	let respuesta = JSON.parse(response);

	let template = '<option value="Seleccionar">Seleccionar</option>';

	respuesta.forEach(element => {

		template+= 
			`
			<option>${element.nombre}</option>			
			`      
	});
		
	$('#selectClientes').html(template);   

  });

}

function lista_productos(){ //OBTIENE LOS PRODUCTOS

  $.get(url + 'ventas/obtenerProductos/', function(response) {

	let respuesta = JSON.parse(response);

	let template = '<option value="Seleccionar">Seleccionar</option>';

	respuesta.forEach(element => {

		template+= 
			`			
			<option optionSelected="${element.precioVenta}">${element.nombre}</option>			
        	`	
	});
		
	$('#selectProductos').html(template);   

  });

}






        //////     AGREGAS VENTAS     //////



function agregar_lista_productos(){

  if ($('#selectProductos').val() == "Seleccionar") {
	alert('debe seleccionar un producto');
  }
  else if ($('#cliente').val() == "Seleccionar") {
		alert('debe seleccionar un cliente');
  }
  else if ($('#cantidad').val() == "") {
		alert('debe seleccionar una cantidad');
  }else{
	

	let template = "";
    
    array_lista_productos.push({

        producto:$('#selectProductos').val(),
        precioUnidad:$('#precioUnidad').val(),
        cantidad:$('#cantidad').val(),
        total:$('#total').val()
    });
    console.log(array_lista_productos);

    array_lista_productos.forEach( lista =>{
		console.log(lista.producto);
		template += `
		  <tr>
            <td>${lista.producto}</td>
            <td>${lista.precioUnidad}</td>
            <td>${lista.cantidad}</td>
            <td>${lista.total}</td>
		  </tr>
		`
	});

	$('#tbodyProductos').html(template);
	$("#dataForm")[0].reset();
  }
}


function obtenerOption(param){

	//let id = $('#selectProductos').val();	
	let precio = $('option:selected', param).attr('optionSelected');

    $('#precioUnidad').val(precio);
}

	

function cantidadProducto(){

	let cantidad = $('#cantidad').val();
	let precio = $('#precioUnidad').val();
	let total = cantidad * precio;

	$('#total').val(total);
}

