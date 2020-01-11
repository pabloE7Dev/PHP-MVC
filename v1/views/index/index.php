
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administracion</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo URL . 'public/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo URL . 'public/css/sb-admin-2.min.css'; ?>" rel="stylesheet">

  


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Empresa</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL; ?>">
          <span>Home</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        PANEL
      </div>

      <!-- Nav Ventas -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL . 'ventas'; ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Ventas</span></a>
      </li>

      <!-- Nav Clientes -->
      <li class="nav-item">
        <a class="nav-link" href="clientes" id="<?php echo URL . 'clientes'; ?>" data-toggle="collapse" data-target="#collapseclientes" aria-expanded="true" aria-controls="collapseclientes">
          <i class="fas fa-fw fa-table"></i>
          <span>Clientes</span>
        </a>
        <div id="collapseclientes" class="collapse" >           
          <a class="nav-link" href="<?php echo URL . 'clientes'; ?>">
            <span>Clientes</span>
          </a>       
        </div>
        <div id="collapseclientes" class="collapse" >           
          <a class="nav-link" href="<?php echo URL . 'clientes/agregar'; ?>">
            <span>Registrar Cliente</span>
          </a>       
        </div>

      </li>
      <!-- Nav Productos -->
      <li class="nav-item">
        <a class="nav-link" href="productos" id="<?php echo URL . 'productos'; ?>" data-toggle="collapse" data-target="#collapseProductos" aria-expanded="true" aria-controls="collapseProductos">
          <i class="fas fa-fw fa-object-ungroup"></i>
          <span>Productos</span>
        </a>
        <div id="collapseProductos" class="collapse" >           
          <a class="nav-link" href="<?php echo URL . 'productos'; ?>">
            <span>Productos</span>
          </a>       
        </div>
        <div id="collapseProductos" class="collapse" >           
          <a class="nav-link" href="<?php echo URL . 'productos/agregar'; ?>">
            <span>Registrar Producto</span>
          </a>       
        </div>

      </li>
      <!-- Nav insumos -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-clipboard">
          </i>
          <span>Insumos</span>
        </a> 
      </li>
      <!-- Nav Empleados -->
      <li class="nav-item">
        <a class="nav-link" href="empleados" id="<?php echo URL . 'empleados'; ?>" data-toggle="collapse" data-target="#collapseEmpleados" aria-expanded="true" aria-controls="collapseEmpleados">
          <i class="fas fa-fw fa-user"></i>
          <span>Empleados</span>
        </a>
        <div id="collapseEmpleados" class="collapse" >           
          <a class="nav-link" href="<?php echo URL . 'empleados'; ?>">
            <span>Empleados</span>
          </a>       
        </div>
        <div id="collapseEmpleados" class="collapse" >           
          <a class="nav-link" href="<?php echo URL . 'empleados/agregarEmpleados'; ?>">
            <span>Agregar empleados</span>
          </a>       
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">        
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo $_SESSION['user']?></span>
                <span class="img-profile rounded-circle" ><i class="fas fa-fw fa-user"></i></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar session
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div id="container-selected">
          <?php 
            /*
              agrega la vista que se especifica en el controlador
            */
            if (isset($_GET['url'])){
              require_once 'views/' . $this->vistaController . '.php';
            }else{
              require_once 'views/home/index.php';
            }          
          ?>         
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; App Srucs</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seguro de cerrar session?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Aceptar" si está listo para finalizar su sesión</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="<?php echo URL . 'views/close.php'; ?>">Aceptar</a>
        </div>
      </div>
    </div>
  </div>





  <!-- Bootstrap core JavaScript-->

  <script src="<?php echo URL . 'public/vendor/jquery/jquery.min.js'; ?>"></script>
  <script src="<?php echo URL . 'public/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo URL . 'public/vendor/jquery-easing/jquery.easing.min.js'; ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo URL . 'public/js/sb-admin-2.min.js'; ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo URL . 'public/vendor/chart.js/Chart.min.js'; ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo URL . 'public/js/demo/chart-area-demo.js'; ?>"></script>
  <script src="<?php echo URL . 'public/js/demo/chart-pie-demo.js'; ?>"></script>

  <!-- Main page JavaScript-->
  <script src="<?php echo URL . 'public/main.js'; ?>"></script>
  <script src="<?php echo URL . $this->jsModulo; ?>"></script>

</body>

</html>
