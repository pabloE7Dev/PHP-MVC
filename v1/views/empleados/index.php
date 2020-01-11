  <!-- DataTales Example -->
  <div class="container mt-5" onload="<?php echo $this->get_empleadosJS;?>">
    <div style="height: 70px;"  class="col-lg-12  mt-2">
      <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
    </div>
    <div>
      <a href="<?php echo URL . 'empleados/agregarEmpleados'; ?>" class="btn btn-success " role="button" aria-disabled="true">Agregar empleado</a>
    </div>
    <div class="card shadow mt-4 mb-4">
      <div class="card-header py-3 bg-dark">
        <h6 class="m-0 font-weight-bold text-white">Tabla de Empleados</h6>
      </div>
      
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>             
              <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Dni</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Horas</th>
                <th>Sueldo</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tbody-empleados">
            <tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
