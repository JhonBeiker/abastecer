<?php
    class AtencionController extends BaseController{
        public function __construct(){// Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
        }

        public function index(){
            $this->view('Atencion/Atencion');
        }

        public function register(){
            $this->view('Atencion/RegistrarAtencion');
        }

        public function read(){
            $this->view('Atencion/ConsultarAtencion');
        }

        public function details(){
            
        }
    }
?>