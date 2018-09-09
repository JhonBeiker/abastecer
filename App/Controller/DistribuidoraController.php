<?php
    class DistribuidoraController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        public function index(){
            $this->view('Distribuidora/Distribuidora');
        }

        public function register(){
            $this->view('Distribuidora/RegistrarDistribuidora');
        }

        public function read(){
            $this->view('Distribuidora/ConsultarDistribuidora');
        }
    }
?>