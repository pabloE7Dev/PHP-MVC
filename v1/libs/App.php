<?php
// Enrutamiento

Class App{
                       
	function __construct(){

        $url= isset($_GET['url']) ? $_GET['url']: null; //verifica si existe una url

		$url = rtrim($url, '/'); // serapa al primer controlador de los demas metodos a ejecutar
        
        $url = explode('/', $url); //divide cada unos de los parametros que estamos enviando

        if (empty($url[0])) { // en caso de no existir metodos se carga la vista index

            $archivoController = 'controllers/index.php';
            require_once $archivoController;
            $controller = new Index();
            $controller->loadModel('index');
            $controller->render();
            return false;

        }
       
        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) { //verifica si existe un archivo(url)
        	require_once $archivoController;
            
            //inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $nparametros = sizeof($url);
            
            if ($nparametros > 1) { // verifica si existe un metodo

                if ($nparametros > 2) { // verifica si exinten parametros

                    $params = [];
                    for ($i=2; $i<$nparametros; $i++) { 
                        array_push($params, $url[$i]);
                    }
                    $controller->{$url[1]}($params);

                }else{
                    $controller->{$url[1]}();
                }

            }else{
                $controller->render();
            }

        }else{
        	echo "error al cargar el recurso ";
        }

	}

}


?>