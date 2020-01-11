<?php



Class Index extends Controller{

    

    function __construct()
    {
        parent::__construct();
        
        $this->validate_session();

    }


    function render(){
        $this->vistaController('index/index');

    }


    


}



?>