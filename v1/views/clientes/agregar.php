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
                <h1 class="h4 text-gray-900 mb-4">Registrar Cliente</h1>
              </div>
              <form  id="dataForm" data-form="clientes" class="user" autocomplete="off" >
                <div class="form-group row">
                  <div class="col-sm-12 pb-3 mt-3 mb-sm-0">
                    <input type="text" name="empresa" class="form-control form-control-user" id="empresa" placeholder="Empresa" required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nombre" class="form-control form-control-user" id="nombre" placeholder="Nombre" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="apellido" class="form-control form-control-user" id="apellido" placeholder="Apellido" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-8 mb-3 mb-sm-0">
                    <input type="email" name= "email" class="form-control form-control-user" id="email" placeholder="Email" >
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name= "celular" class="form-control form-control-user" id="celular" placeholder="Celular" pattern="^([0-9])*$" required>
                  </div>
                </div>
                <input type="submit" id="btn-agregar" class="btn btn-danger  btn-user btn-block" value="Registrar cliente"> 
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>