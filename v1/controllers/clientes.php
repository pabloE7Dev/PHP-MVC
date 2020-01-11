<?php


Class Clientes extends Controller{

    

	function __construct(){
	
		parent::__construct();

		$this->nombreTabla = 'cliente';
		$this->view->jsModulo = 'public/js/modulos/clientes.js';
    $this->validate_session();  

	}

	function render(){
        $this->vistaController('clientes/index');
    }



    function agregar(){

        $this->vistaController('clientes/agregar');
    
    }



    //      FUNCIONES    //

    function obtenerTodo(){

    	$result = $this->model->obtenerTodo_model($this->nombreTabla);
      $items = json_encode($result);
      echo $items;

    }


    function insertar($parametros = null){

      header("Content-Type: application / x-www-form-urlencoded", true);
      $data = $_POST;
      $result = $this->model->insert_model($this->nombreTabla, $data);
      echo $result; 
         
    }


    function eliminar($parametros = null){

        $array['data'] = array('idcliente' => $parametros[0]);
        $result = $this->model->eliminar_model($this->nombreTabla, $array);

        echo $result;
    }

}
?>