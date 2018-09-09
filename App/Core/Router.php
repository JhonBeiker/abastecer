<?php
    class Router{ // Se encarga del enrutamiento de las vistas.
        public function url($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION){ // Recibe el controlador y la acción.
            $urlString = "index.php?controller=$controller&action=$action"; // Crea la url.
            return $urlString; // Retorna la url.
        }
    }
?>