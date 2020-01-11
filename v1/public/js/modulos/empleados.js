
var panel_respuesta = $("#respuesta-request").hide();
var tbody_tabla = $('#tbody-empleados');


get_empleados();

//OBTIENE TODOS LOS EMPLEADOS
function get_empleados(){

  $.get(url + 'empleados/obtenerTodo/', function(response) {
	let respuesta = JSON.parse(response);

	//let respuesta = resp;
	let template = '';

	respuesta.forEach(element => {

		let url_api = url+"empleados/eliminar/" + element.idempleado;

		template+= 
			`
			<tr idEmpleados="${element.idempleado}" id= "fila-${element.idempleado}">
			  <td>${element.nombre + ' ' + element.apellido}</td>
			  <td>${element.edad}</td>
		      <td>${element.dni}</td>
		      <td>${element.celular}</td>
		      <td>${element.email}</td>
		      <td>${element.direccion}</td>
		      <td>${element.horas}</td>
		      <td>${element.sueldo}</td>
		      <td>
		        <button type="button" class="delete_empleado btn btn-danger fas fa-trash-alt"></button>
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
    $("#dataForm").on("submit", function(e){
        event.preventDefault();
        
        var data = {
            "nombre":$('#nombre').val(),
            "apellido":$('#apellido').val(),
            "dni":$('#dni').val(),
            "celular":$('#celular').val(),
            "direccion":$('#direccion').val(),
            "horas":$('#horas').val(),
            "sueldo":$('#sueldo').val(),
            "email":$('#email').val(),
            "edad":$('#edad').val()
        }
        $.post(url+"empleados/insertar/", {data}, function(result, statusText, xhr){

            if (result == "exito") {
                let template = 
            `
                <div class="alert alert-success " role="alert">
                  empleado registrado
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

$(document).on('click', '.delete_empleado', function(){

	let element = $(this)[0].parentElement.parentElement;
	let id = $(element).attr('idEmpleados');

	fetch(url+'empleados/eliminar/' + id, {
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

    const tbody = document.querySelector("#tbody-empleados");
		const fila  = document.querySelector("#fila-"+id);
		tbody.removeChild(fila);
    });
  ;
	
	
});