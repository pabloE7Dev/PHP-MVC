<?php


Class Ventas extends Controller{

    

	function __construct(){
	
		parent::__construct();
		$this->validate_session();
		$this->nombreTabla = 'ventas';
		$this->view->jsModulo = 'public/js/modulos/ventas.js';

	}

	function render(){
        $this->vistaController('ventas/index');
    }


    function obtenerVentas(){
      $result = $this->model->obtenerVentas_model($this->nombreTabla);
      $items = json_encode($result);
      echo $items;
    }

    
}

?>