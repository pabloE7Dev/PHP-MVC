  
  <link rel="stylesheet" type="text/css" href="<?php echo URL . 'public/css/ventas.css'; ?>">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h2></h2>
    <a href="#" class="d-none d-sm-inline-block mr-4 btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Reporte mensual</a>
  </div>

  <!-- DataTales Example -->
  <div class="container mt-2">
    <div style="height: 70px;"  class="col-lg-12  mt-2">
      <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
    </div>
    <div class="card shadow mb-4">
      <div class="card-header py-3 bg-white border-0">
        <h3 class="m-1 font-weight-bold ventas text-dark"><small>Ventas</small></h3>
      </div>
      <div class="border-0 d-flex justify-content-between align-items-center">
        <h2></h2> 
        <form class="form">
          <div class="form-group row  mr-4">
            <div class="col-sm-12 mb-sm-0">
              <label for="search" class="label-name border"></label>
              <input type="text" name="search" id="search" class="search outline-0" placeholder="Search">
            </div>                  
          </div>         
        </form> 
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-borderless table-condensed" id="dataTable" width="100%" cellspacing="0">
            <thead >
              <tr>
                <th class="text-dark font-weight-bold">Producto</th>
                <th class="text-dark font-weight-bold">Fecha</th>
                <th class="text-dark font-weight-bold">Cliente</th>               
                <th class="text-dark font-weight-bold">Total</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tbody-ventas">           
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

