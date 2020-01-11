<?php


/**
 * 
 */
class Productos extends Controller
{
	
	
	function __construct()
	{
		parent::__construct();
        $this->validate_session();

		$this->nombreTabla = 'productos';
		$this->view->jsModulo = 'public/js/modulos/productos.js';
	}

	function render(){
        $this->vistaController('productos/index');
    }


    function agregar(){
        $this->vistaController('productos/agregar');
    }



    //    FUNCIONES    //

    function obtenerTodo(){
		$result = $this->model->obtenerTodo($this->nombreTabla);
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
        $array['data'] = array('idproductos' => $parametros[0]);
        $result = $this->model->eliminar_model($this->nombreTabla, $array);
        echo $result;
    }


}


?>