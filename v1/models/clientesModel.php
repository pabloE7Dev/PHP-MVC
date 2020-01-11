<?php


/**
 * 
 */
class ClientesModel extends Model
{
	
	function __construct()
	{
		parent::__construct();

	}

    function obtenerTodo_model($nombre_tabla){
		$result = $this->consulta_get($nombre_tabla);
		return $result;
	}


	function insert_model($nombre_tabla, $parametros = null){
		$campos = '(';
        $camposPrepare = '(';
        $i = 0;

        foreach (($parametros['data']) as $clave => $valor) {
 
            $campos .=  $clave;
            $camposPrepare .= ":" . $clave;
           
            if ($i < count($parametros['data']) -1) { //

                $campos .= ', ';
                $camposPrepare .= ', ';
            $i++;
            }else{

                $campos .= ')';
                $camposPrepare .= ')';
            } 
        }        

        try {
        	$sql = "INSERT INTO " . $nombre_tabla .  $campos . " VALUES " . $camposPrepare;
            //return $sql;
        	$consulta = $this->db->connect()->prepare($sql);

            foreach (($parametros['data']) as $clave => $valor) {

                $referencia = ":" . $clave . "";
                $data_referencia = $valor;
                $consulta->bindValue($referencia, $data_referencia);
            }
    
            $consulta->execute();

    	    if ($consulta->rowCount() > 0){          
                echo "exito";
                   		
    	    }else{            
    	    	echo "error";

    	    }
          
        }catch(Exception $e) {
           echo $e->getMessage();
        }
	}


    function eliminar_model($nombre_tabla, $parametros){
        $result = $this->consulta_delete($nombre_tabla, $parametros);
        return $result;
    }


}


?>