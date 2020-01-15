var panel_respuesta = $("#respuesta-request").hide();
var tbody_tabla = $('#tbody-ventas');

get_ventas();

lista_clientes();
lista_productos();

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







//OBTIENE TODAS LAS VENTAS
function lista_clientes(){

  $.get(url + 'ventas/obtenerClientes/', function(response) {

	let respuesta = JSON.parse(response);

	let template = '';

	respuesta.forEach(element => {

		template+= 
			`
			<option>${element.nombre}</option>			
			`      
	});
		
	$('#selectClientes').html(template);   

  });

}

function lista_productos(){

  $.get(url + 'ventas/obtenerProductos/', function(response) {

	let respuesta = JSON.parse(response);

	let template = '';

	respuesta.forEach(element => {

		template+= 
			`
			<option>${element.nombre}</option>			
			`      
	});
		
	$('#selectProductos').html(template);   

  });

}