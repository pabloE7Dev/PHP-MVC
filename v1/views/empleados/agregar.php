  
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div style="height: 70px;"  class="col-lg-12  mt-2">
            <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
          </div>
          <div class="col-lg-7 m-auto">           
            <div class="p-2">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Agregar nuevo empleado</h1>
              </div>
              <form  id="dataForm" data-form="empleados" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre" placeholder="Nombre" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="apellido" class="form-control form-control-user" id="apellido" placeholder="Apellido" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-8 mb-3 mb-sm-0">
                    <input type="email" name= "email" class="form-control form-control-user" id="email" placeholder="Email">
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name= "celular" class="form-control form-control-user" id="celular" placeholder="Celular" pattern="^([0-9])*$" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-5 mb-3 mb-sm-0">
                    <input type="text" name= "direccion" class="form-control form-control-user" id="direccion" placeholder="Direccion" required>
                  </div>
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name= "edad" class="form-control form-control-user" id="edad" placeholder="Edad" pattern="^([0-9])*$">
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name= "dni" class="form-control form-control-user" id="dni" placeholder="Dni" pattern="^([0-9])*$" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name= "horas" class="form-control form-control-user" id="horas" placeholder="Horas" pattern="^([0-9])*$">
                  </div>                  
                  <div class="col-sm-6">
                    <input type="text" name= "sueldo" class="form-control form-control-user" id="sueldo" placeholder="sueldo" pattern="^([0-9])*$">
                  </div>
                </div>

                <input type="submit" id="btn-agregar" class="btn btn-danger  btn-user btn-block" value="Registrar empleado"> 

              </form>
              <hr>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>