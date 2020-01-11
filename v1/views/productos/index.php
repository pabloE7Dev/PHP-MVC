<!-- Page Reportes -->
  <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 ml-4 text-gray-800"></h1>
    <a href="#" class="d-none d-sm-inline-block mr-4 btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
  </div>
  <!-- DataTales Example -->
  <div class="container mt-5">
    <div style="height: 70px;"  class="col-lg-12  mt-2">
      <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
    </div>
    <div class="card shadow mb-4">
      <div class="card-header py-3 bg-white border-0">
        <h6 class="m-0 font-weight-bold text-dark ">Tabla de Producto</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-borderless table-condensed" id="dataTable" width="100%" cellspacing="0">
            <thead class="border-bottom">
              <tr>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Precio Costo</th>
                <th>Precio Venta</th>
                <th>Descripcion</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tbody-productos">             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
