<?php


class LoginModel extends Model
{

    function __construct()
    {

        parent::__construct();


    }


    function login_model($nombre_tabla, $data = null){


        try{

    	$sql = "SELECT * FROM usuarios WHERE user = :user AND password = :password";


    	$consulta = $this->db->connect()->prepare($sql);

        foreach (($data['data']) as $clave => $valor) {

            $referencia = ":" . $clave . "";
            if (is_string($valor)) {
            	$data_referencia = $valor;
            }else{
                $data_referencia = $valor;         	
            }
            
            $consulta->bindValue($referencia, $data_referencia);

        }
            
        $consulta->execute();

    	if ($consulta->rowCount() > 0){

            $result = $consulta->fetch(PDO::FETCH_ASSOC);          
                                   
    		$_SESSION['idusuarios'] = $result['idusuarios'];
    		$_SESSION['idempresa']  = $result['idempresa'];
    		$_SESSION['user']       = $result['user'];
    		$_SESSION['password']   = $result['password'];
            
            echo "exito";
                            		
    	}else{            
            echo "usuario no registrado";
    	}

        }catch(Exception $e){
    	    die("Error: " . $e->getMessage());
        }

	}
}


?>