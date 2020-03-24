  <div class="row">
    <div style="height: 60px;" class="col-lg-12 mt-2">
      <div id="respuesta-request" class=" col-lg-9 m-auto "></div>
    </div>
  </div>
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-4">

      <div class="card-body p-0" style="background: #F8F6F6;">
        <!-- Nested Row within Card Body -->
        <div class="row">
               
          <div class="col-lg-10 m-auto">           
            <div class="p-2">

              <div class="form-group row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <label for="selectClientes">cliente:</label>
                    <select id="selectClientes" class="form-control form-control-md" >
                    <option selected>Seleccionar</option>
                  </select>
                </div>                                   
              </div>
              <form  id="dataForm" data-form="ventas" class="user" autocomplete="off" >                
                <div class="form-group row">
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <label for="selectProductos">producto:</label>
                    <select onChange="obtenerOption(this)" id="selectProductos" class="form-control form-control-md" >   
                    </select>
                  </div>
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <label for="precioUnidad">precio u.</label>
                    <input type="text" id="precioUnidad" name="precioUnidad" class="form-control " id="apellido" placeholder="" disabled >
                  </div>
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <label for="cantidad">cantidad:</label>
                    <input type="text" onkeyup="cantidadProducto()" id="cantidad" name="cantidad" class="form-control" placeholder="cantidad" >
                  </div>
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <label for="total">total:</label>
                    <input type="text"  id="total" name="total" class="form-control " placeholder="" disabled >
                  </div>
                </div>
              
            </div>
          </div>
          <div class="col-lg-10 m-auto pb-2">
            <div class="d-sm-flex align-items-center justify-content-between  p-2">
              <h1 class="h3 ml-4 text-gray-800"></h1>
              <button type="button" onclick="agregar_lista_productos()" id="" class=" d-none d-sm-inline-block mr-2 btn btn-outline-dark btn-sm-5"><i class=" pl-2 pr-2">agregar</i></button>
            </div>
          </div>
        </form>
        </div>   
      </div>

      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="card-body " style=" min-height: 210px;">
          <div class="table-responsive">
            <table class="table table-borderless table-condensed table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <th>producto</th>
                <th>cantidad</th>
                <th>precio u.</th>
                <th>total</th>
              </thead>
              <tbody id="tbodyProductos">
              </tbody>
            </table>
          </div>          
        </div>
        <hr>
        <div class="card-body ">        
          <p class=" p-1 text-right">total a pagar: 240</p>
        </div>
      </div>
    </div>   
  </div>

  <div class="d-sm-flex align-items-center justify-content-between mb-6 pb-5">
    <h1 class="h3 ml-4 text-gray-800"></h1>
    <button type="button" class="d-none d-sm-inline-block mr-4 btn btn-dark btn-md">generar venta</button>
  </div>