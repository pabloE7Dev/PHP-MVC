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

    


    public function search_model($busqueda = null)
    {

        try {
            $data_return = [];

            $sql = 
            "SELECT v.*, p.nombre AS nombreProducto, c.nombre AS nombreCliente
            FROM ventas AS v
            INNER JOIN productos AS p  ON v.idproducto = p.idproductos
            INNER JOIN usuarios AS u  ON v.idusuario = u.idusuarios
            INNER JOIN cliente AS c ON v.idcliente = c.idcliente
            WHERE v.fecha_venta LIKE '$busqueda%' OR p.nombre LIKE '$busqueda%' OR c.nombre LIKE '$busqueda%'
            ";

            $consulta = $this->db->connect()->query($sql);

            while ( $row = $consulta->fetch(PDO::FETCH_ASSOC) ) {

                $datos = array(
                    'idventa' => $row['idventas'],
                    'fecha' => $row['fecha_venta'],
                    'total' => $row['total'],
                    'producto' => $row['nombreProducto'],
                    'cliente' => $row['nombreCliente']    
                );
                array_push($data_return, $datos);
                   
            }
                                       
            return $data_return;

        } catch (\Throwable $th) {}

        $consulta = $this->db->connect()->query("SELECT * FROM tareas WHERE nombre LIKE '$busqueda%'");
    }


    

	function obtenerVentas_model($parametro = null)
	{

		try {
            $data_return = [];

            $sql = 
		    'SELECT v.*, p.nombre AS nombreProducto, c.nombre AS nombreCliente
		    FROM ventas AS v
            INNER JOIN productos AS p  ON v.idproducto = p.idproductos
            INNER JOIN usuarios AS u  ON v.idusuario = u.idusuarios
            INNER JOIN cliente AS c ON v.idcliente = c.idcliente
            ';

            $consulta = $this->db->connect()->query($sql);

            while ( $row = $consulta->fetch(PDO::FETCH_ASSOC) ) {

                $datos = array(
                    'idventa' => $row['idventas'],
                    'fecha' => $row['fecha_venta'],
        	        'total' => $row['total'],
        	        'producto' => $row['nombreProducto'],
        	        'cliente' => $row['nombreCliente']    
                );
                array_push($data_return, $datos);
                   
            }
                                       
            return $data_return;

        } catch (\Throwable $th) {}
        
	}


    function eliminar_model($nombre_tabla, $parametros){
        $result = $this->consulta_delete($nombre_tabla, $parametros);
        return $result;
    }


    function obtenerClientes_model($tabla){
      $resultados = $this->consulta_get($tabla);
      return $resultados;
    }

    function obtenerProductos_model($tabla){
      $resultados = $this->consulta_get($tabla);
      return $resultados;
    }


}


?>