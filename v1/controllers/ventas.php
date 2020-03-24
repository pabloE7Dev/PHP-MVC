<?php


Class Ventas extends Controller{

    

	function __construct(){
	
		parent::__construct();
		$this->validate_session();
		$this->nombreTabla = 'ventas';
		$this->view->jsModulo = 'public/js/modulos/ventas.js';

	}

	//     vistas     //

	function render(){
        //$this->view->jsModulo = '';
        $this->vistaController('ventas/index');

    }
    function agregar(){
        $this->vistaController('ventas/agregar');
    }


    //    metodos     //


    function obtenerVentas(){
      $result = $this->model->obtenerVentas_model($this->nombreTabla);
      $items = json_encode($result);
      echo $items;
    }


    public function search($param = null)
	{
		$busqueda = $param[0];
        $tareas = $this->model->search_model($busqueda);
        $items = json_encode($tareas);
        echo $items;
	}


	function eliminar($parametros = null){

        $array['data'] = array('idventas' => $parametros[0]);
        $result = $this->model->eliminar_model($this->nombreTabla, $array);

        echo $result;
    }


    function obtenerClientes(){
      $resultados = $this->model->obtenerClientes_model('cliente');
      $datos = json_encode($resultados);
      echo $datos;
    }


    function obtenerProductos()
    {
      $resultados = $this->model->obtenerProductos_model('productos');
      $datos = json_encode($resultados);
      echo $datos;
    }

    
}

?>