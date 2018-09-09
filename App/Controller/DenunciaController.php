<?php
    class DenunciaController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        public function index(){
            $this->view('Denuncia/Denuncia');
        }

        public function register(){
            $this->view('Denuncia/RegistrarDenuncia');
        }

        public function read(){
            $this->view('Denuncia/ConsultarDenuncia');
        }

        public function details(){
            $this->view('Denuncia/DetallesDenuncia');
        }
    }
?>