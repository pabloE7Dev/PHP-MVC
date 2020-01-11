var panel_respuesta = $("#respuesta-request").hide();

//(document).ready(function() {

$(document).ready(function() {
   $("#dataForm").on("submit", function(event){
        event.preventDefault();

    var data = {
        "user":$('#user').val(),
        "password":$('#password').val()
    }

    $.post(url+"login/login", {data}, function(result, status, xmlHttp){
      

      if(result == "exito"){
        window.location.replace(url);
      }else{
        let template = 
            `
                <div class="alert alert-white text-center text-danger" role="alert">
                  ${result}
                </div>
            `;
              $(panel_respuesta).html(template);
              $(panel_respuesta).show();
              $(panel_respuesta).fadeOut(6000);
            
        console.log('usuario no registrado');
      }
      
      $('form')[0].reset();
  
    });    

  });
});
