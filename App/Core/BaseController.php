<?php
    class BaseController{ // Clase que controla las vistas y los datos que reciben.
        public function __construct(){
            require_once 'EntidadBase.php'; // Incluye el archivo EntidadBase
            require_once 'BaseModel.php'; // Incluye el archivo BaseModel
            foreach(glob('Model/*.php') as $file){ // Recorre todos los archivos de la carpeta Model con la extensión PHP.
                require_once($file); // Incluye el archivo
            }
        }    
        
        public function view($view){ // Método que se encarga de redireccionar a una vista sin datos.
            require_once "Router.php"; // Incluye el archivo del enrutador
            $helper = new Router(); // Instancia el objeto Router
            require_once "View/".$view."View.php"; // Incluye la vista de la ruta especificada.
        }

        public function viewArray($view,$data){ // Método que se encarga de redireccionar a una vista con un array datos.
            /* viewArray() recibe los datos del contolaror en forma de un array, lo recorre y crea una variable
           dinamica con el indice asociativo y le asigna el valor que almacena el indice,
           luego carga los helpers de la vista y carga la vista que llega como parametro. */
            foreach($data as $id_assoc => $value){ 
                ${$id_assoc} = $value;
            }
            require_once "Router.php"; // Incluye el archivo del enrutador
            $helper = new Router(); // Instancia el objeto Router
            require_once "View/".$view."View.php"; // Incluye la vista de la ruta especificad
        }
        
        public function redirect($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION){ // Metodo que redirecciona
            // Redirecciona dependiendo del controlador y la accion que realizara ese controlador.
            header("Location:index.php?controller=".$controller."&action=".$action);
        }
    }
?>