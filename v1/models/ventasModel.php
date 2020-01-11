<?php


/**
 * 
 */
class VentasModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}



	function obtenerVentas_model($parametro = null)
	{
		$sql = 
		'SELECT * FROM ventas AS v
        INNER JOIN productos AS p  ON v.idproducto = p.idproductos
        INNER JOIN usuarios AS u  ON v.idusuario = u.idusuarios
        INNER JOIN cliente AS c ON v.idcliente = c.idcliente
        WHERE v.idventas = 1';
	}


}


?>