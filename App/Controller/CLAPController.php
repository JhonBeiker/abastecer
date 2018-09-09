<?php
    class CLAPController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        public function index(){
            $this->view('CLAP/CLAP');
        }

        public function register(){
            $this->view('CLAP/RegistrarCLAP');
        }

        public function read(){
            $this->view('CLAP/ConsultarCLAP');
        }

        public function createClapStructure(){
            $this->view('EstructuraCLAP/RegistrarEstructura');
        }

        public function details(){
            
        }
    }
?>