<?php
    class FamiliaController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
            
        }

        // Consultas -> (Familia en general)
        public function index(){
            $this->view('Familia/Familia');
        }

        public function registerFamily(){
            $this->view('Familia/RegistrarFamilia');
        }

        public function readFamily(){
            $this->view('Familia/ConsultarFamilia');
        }

        public function detailsFamily(){
            
        }

        // Consultas -> (Miembros de familia)
        public function registerFamilyMember(){
            $this->view('Familia/RegistrarIntegranteFamilia');
        }

        public function readFamilyMember(){
            $this->view('Familia/ConsultarIntegranteFamilia');
        }

        public function detailsFamilyMember(){
            
        }
    }
?>