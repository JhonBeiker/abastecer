<?php
    class UsuarioController extends BaseController{
        public function __construct(){ // Constructor de la clase
            parent::__construct(); // Ejecuta el constructor del padre.
        }

        public function index(){
            $this->view("Usuario/Usuario");
        }

        public function gestionarUsuario(){
            $user = new Usuario(); // Instancia un objeto de tipo User
            $allUsers = $user->getAll(); // Obtiene todos los usuarios gracias al getter de la clase y se almacenan.
            $this->viewArray('Usuario/GestionarUsuario',array(
                "allUsers" => $allUsers
            ));
        }

        public function registerData(){ // Registra datos en la base de datos
            if(isset($_POST['register'])){
                $user = new Usuario(); // Instancia el objeto User
                $user->setNombreUsuario($_POST['nombreUsuario']);
                $user->setApellidoUsuario($_POST['apellidoUsuario']);
                $user->setCedulaUsuario($_POST['cedulaUsuario']);
                $user->setTelefonoUsuario($_POST['telefonoUsuario']);
                $user->setEmailUsuario($_POST['emailUsuario']);
                $user->setUsuario($_POST['usuario']);
                $user->setRolUsuario($_POST['rolUsuario']);
                $user->setPasswordUsuario($_POST['passwordUsuario']);
                // var_dump($_POST['nombreUsuario']);
                $save = $user->insert();
            }
            $this->redirect('Usuario','gestionarUsuario');
        }
        
        public function updateData(){
            if(isset($_POST['update'])){
                $user = new Usuario(); // Instancia el objeto User
                $user->setIdUsuario($_POST['idUsuario']);
                $user->setNombreUsuario($_POST['nombreUsuario']);
                $user->setApellidoUsuario($_POST['apellidoUsuario']);
                $user->setCedulaUsuario($_POST['cedulaUsuario']);
                $user->setTelefonoUsuario($_POST['telefonoUsuario']);
                $user->setEmailUsuario($_POST['emailUsuario']);
                $user->setUsuario($_POST['usuario']);
                $user->setRolUsuario($_POST['rolUsuario']);
                $user->setPasswordUsuario($_POST['passwordUsuario']);
                var_dump($user);
                $save = $user->update();
            }
            // $this->redirect('Usuario','gestionarUsuario');
        }

        public function deleteData(){
            if(isset($_GET['idUsuario'])){ // Si se envio el id por la url
                $id = (int)$_GET['idUsuario']; // Almacena el id como un entero.
                $user = new Usuario(); // Instancia un objeto de tipo Users.
                $user->delete($id); // Elimina el valor que ingresa.
            }
            $this->redirect("Usuario","gestionarUsuario"); // Y redirecciona la vista.
        }
        
        public function details(){
            if(isset($_GET['idUsuario'])){
                $id = (int)$_GET['idUsuario'];
                $user = new Usuario();
                $register = $user->getById($id);
                $this->viewArray('Usuario/DetallesUsuario',array('register'=>$register));
            }
        }

        public function test(){
            echo $_SERVER['REQUEST_URI'];
        }
    }
?>