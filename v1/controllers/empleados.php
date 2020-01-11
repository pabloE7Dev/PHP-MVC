<?php


Class Empleados extends Controller{

    

	function __construct(){
	
		parent::__construct();
        $this->validate_session();

        $this->nombreTabla = 'empleado';
        $this->view->jsModulo = 'public/js/modulos/empleados.js';
        

	}


    //        VISTAS        //

	function render(){
        $this->vistaController('empleados/index');

    }


    function agregarEmpleados()
    {
        $this->vistaController('empleados/agregar');
    }




    //       FUNCIONES       //

    function obtenerTodo(){

    	$result = $this->model->obtenerTodo($this->nombreTabla);
        $items = json_encode($result);
        echo $items;

    }

    function obtener($parametros){

        $result = $this->model->obtener_model($this->nombreTabla, $parametros);
        print_r($result);
    }

    function insertar($parametros = null){
        header("Content-Type: application / x-www-form-urlencoded", true);
        $data = $_POST;
        $result = $this->model->insert_model($this->nombreTabla, $data);
        echo $result; 
         
    }

    function modificar($parametros)
    {
        $result = $this->model->modificar_model($this->nombreTabla, $parametros);
        print_r($result);
    }

    function eliminar($parametros = null){

        $array['data'] = array('idempleado' => $parametros[0]);
        $result = $this->model->eliminar_model($this->nombreTabla, $array);

        echo $result;
    }


}




?>