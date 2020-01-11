<?php

require_once __DIR__ . '/../config/config.php';

/**/

class Controller
{

	
	function __construct()
	{
		$this->view = new View();
        $this->view->vistaController = '';

	}


    function validate_session(){ //valida si no existe una session para no permitir ingreso a admin

        session_start();
        if ( !isset($_SESSION["user"]) AND !isset($_SESSION["password"]) ){
            
            header('Location: '. URL . 'login'); 
            exit();          
        }
        
    }


    function validacion_start(){ //valida si ya existe una session para no volver a login

        session_start();
        if (isset($_SESSION["user"]) AND isset($_SESSION["password"])){

            header('Location: ' . URL ); 
            exit();          
        }
        
    } 
    

	function loadModel($model){
        $url = 'models/'.$model.'Model.php';

        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }


    function vistaController($vista)
    {
        $this->view->vistaController = $vista;
        $this->view->render('index/index');
    }
}

?>