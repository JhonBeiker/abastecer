<?php
    class EnlacePoliticoController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        public function index(){
            $this->view('EnlacePolitico/Enlace');
        }

        public function register(){
            $this->view('EnlacePolitico/RegistrarEnlace');
        }

        public function read(){
            $this->view('EnlacePolitico/ConsultarEnlace');
        }
    }
?>