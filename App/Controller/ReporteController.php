<?php
    class ReporteController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        public function index(){
            $this->view('Reporte/Reporte');
        }

        public function readCLAP(){

        }

        public function readSolicitud(){

        }

        public function readDenuncia(){

        }

        public function readAtencion(){

        }

        public function getPDF(){
            
        }
    }
?>