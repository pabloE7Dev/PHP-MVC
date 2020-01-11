<?php

class Login extends Controller
{

    function __construct()
    {

        parent::__construct();

        $this->tabla = 'usuarios';
        $this->validacion_start();

    }

    function render(){
        $this->view->render('login/index');
        
    }

    function register(){
    	$this->view->render('login/register');
    }


    //         FUNCIONES            //

    function login($parametros = null){
        //header("Content-Type: application / x-www-form-urlencoded", true);
    
        //echo json_decode(file_get_contents('php://input'));
        $data_post = $_POST;
       
        $result = $this->model->login_model($this->tabla,$data_post);
        
        echo $result;
                
    }

}

?>