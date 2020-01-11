  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
          <div style="height: 70px;"  class="col-lg-12  mt-2">
            <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
          </div>
          <div class="col-lg-7 m-auto">           
            <div class="p-2">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrar Producto</h1>
              </div>
              <form  id="dataForm" data-form="clientes" data-toggle="validator" class="user needs-validation" autocomplete="off" >
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="" required>
                    <div id="invalid-nombre text-danger"></div>
                  </div>                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label for="precioCosto">precio Costo:</label>
                    <input type="text" name="precioCosto" class="form-control " id="precioCosto" placeholder="" pattern="^([0-9])*$" >
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="precioVenta">precio Venta:</label>
                    <input type="text" name= "precioVenta" class="form-control " id="precioVenta" placeholder="" pattern="^([0-9])*$" >
                  </div>                 
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="stock">Stock:</label>
                    <input type="text" name= "stock" class="form-control " id="stock" placeholder="" pattern="^([0-9])*$" >
                  </div>                  
                </div>
                <div class="col-sm-12 pb-3 mt-3 mb-sm-0">
                  <label for="descripcion">Descripcion:</label>
                  <textarea rows="6"  name="descripcion" class="form-control rounded" id="descripcion" placeholder="">
                  </textarea>
                </div>
                <input type="submit" id="btn-agregar" class="btn btn-danger  btn-block" value="Registrar">        
              </form>
              <hr>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>