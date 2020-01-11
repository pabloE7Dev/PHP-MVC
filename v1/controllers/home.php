<?php


Class Home extends Controller{

    

	function __construct(){
	
		parent::__construct();

		$this->view->jsModulo = 'public/js/modulos/clientes.js';
        $this->validate_session();  

	}

	function render(){
        $this->vistaController('home/index');
    }
}


?>