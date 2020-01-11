<?php


class View
{
	
	function __construct()
	{

	}

	function render($nombreVista){ // carga la vista ejecutada por el controlador
		require 'views/' . $nombreVista . '.php';
	}
	
}


?>