<?php
    class CargoController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        public function index(){
            $this->view('Cargo/Cargo');
        }

        public function register(){
            $this->view('Cargo/RegistrarCargo');
        }

        public function read(){
            $this->view('Cargo/ConsultarCargo');
        }
    }
?>