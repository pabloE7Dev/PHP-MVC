<?php



class Model
{
	
	function __construct()
	{
		
		$this->db = new Database();

	}


    function consulta_get($table){ //OBTIENE TODOS LOS REGISTROS DE UNA TABLA

        $columnas = Model::returnColumnasDB($table);

        try {
            $data_return = [];

            $sql = 'SELECT * FROM ' . $table;

            $consulta = $this->db->connect()->query($sql);

            while ( $row = $consulta->fetch(PDO::FETCH_ASSOC) ) {

                for ($i=0; $i < count($columnas); $i++) { 

                    $nombreColumna = $columnas[$i]['column'];

                    $elemento[$nombreColumna] = $row[$nombreColumna];

                }
                array_push($data_return, $elemento);
                   
            }
                                       
            return $data_return;

        } catch (\Throwable $th) {

        }

    }


    function consulta_delete($table, $parametros){


        try {

            foreach (($parametros['data']) as $clave => $valor){

              $sql = 'DELETE FROM ' . $table . ' WHERE ' . $clave . '= ' . $valor;
            }

            $consulta = $this->db->connect()->prepare($sql);
            $consulta->execute();

            if ($consulta->rowCount() > 0) {

                echo "registro eliminado";

            }else{

                return "error ";
            }


        } catch (\Throwable $th) {
            //throw $th;
        }
    }




    // --------------------------------------------------------------//


    function returnColumnasDB($table) // Retorna los nombres de cada columna de una tabla example $array[0][column]
    {
        

        try {

            $name_db = constant('DB');
            $columnas = [];

            $sql = 'SHOW COLUMNS  FROM ' . $table . ' FROM ' . $name_db;

            $consulta = $this->db->connect()->query($sql);

            while ( $row = $consulta->fetch(PDO::FETCH_ASSOC)) {

                $items['column'] = $row['Field'];
                array_push($columnas, $items);
            }

            return $columnas;

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}


?>
