<?php
    class Usuario extends EntidadBase{
        // Atributos
        private $idUsuario;
        private $nombreUsuario;
        private $apellidoUsuario; 
        private $cedulaUsuario;  
        private $emailUsuario; 
        private $telefonoUsuario;
        private $usuario; 
        private $passwordUsuario;
        private $rolUsuario;
        private $table;
        
        public function __construct(){
            $this->table = "usuario";
            parent::__construct();
        }

        // Getters & Setters
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        
        public function getNombreUsuario(){
            return $this->nombreUsuario;
        }

        public function getApellidoUsuario(){
            return $this->apellidoUsuario;
        }
        
        public function getCedulaUsuario(){
            return $this->cedulaUsuario;
        }
        
        public function getEmailUsuario(){
            return $this->emailUsuario;
        }
        
        public function getTelefonoUsuario(){
            return $this->telefonoUsuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }
        
        public function getPasswordUsuario(){
            return $this->passwordUsuario;
        }
        
        public function getRolUsuario(){
            return $this->rolUsuario;
        }
        
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        
        public function setNombreUsuario($nombreUsuario){
            $this->nombreUsuario = $nombreUsuario;
        }
        
        public function setApellidoUsuario($apellidoUsuario){
            $this->apellidoUsuario = $apellidoUsuario;
        }
        
        public function setCedulaUsuario($cedulaUsuario){
            $this->cedulaUsuario = $cedulaUsuario;
        }
            
        public function setEmailUsuario($emailUsuario){
            $this->emailUsuario = $emailUsuario;
        }
            
        public function setTelefonoUsuario($telefonoUsuario){
            $this->telefonoUsuario = $telefonoUsuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function setPasswordUsuario($passwordUsuario){
            $this->passwordUsuario = $passwordUsuario;
        }
        

        public function setRolUsuario($rolUsuario){
            $this->rolUsuario = $rolUsuario;
        }

        public function insert(){
            $query =    "INSERT INTO 
                        $this->table(nombreUsuario,apellidoUsuario,cedulaUsuario,telefonoUsuario,emailUsuario,usuario,rolUsuario,passwordUsuario) 
                        VALUES (
                            :nombreUsuario,:apellidoUsuario,:cedulaUsuario,:telefonoUsuario,:emailUsuario,:usuario,:rolUsuario,:passwordUsuario
                        )"; // Consulta SQL
            $result = $this->DB()->prepare($query); // Prepara la consulta SQL.
            // Limpia los parametros
            $result->bindParam(':nombreUsuario',$this->nombreUsuario);
            $result->bindParam(':apellidoUsuario',$this->apellidoUsuario);
            $result->bindParam(':cedulaUsuario',$this->cedulaUsuario);
            $result->bindParam(':telefonoUsuario',$this->telefonoUsuario);
            $result->bindParam(':emailUsuario',$this->emailUsuario);
            $result->bindParam(':usuario',$this->usuario);
            $result->bindParam(':rolUsuario',$this->rolUsuario);
            $result->bindParam(':passwordUsuario',$this->passwordUsuario);
            $save = $result->execute(); // Ejecuta la consulta - Retorna true ó false.
            return $save;
        }

        
        public function update(){
            $query =    "UPDATE $this->table SET 
                        nombreUsuario = :nombreUsuario, apellidoUsuario = :apellidoUsuario,
                        cedulaUsuario = :cedulaUsuario, telefonoUsuario = :telefonoUsuario,
                        emailUsuario = :emailUsuario,:usuario = :usuario,
                        rolUsuario = :rolUsuario, passwordUsuario = :passwordUsuario
                        WHERE idUsuario = :idUsuario
                        "; // Consulta SQL
            $result = $this->DB()->prepare($query); // Prepara la consulta SQL.
            // Limpia los parametros
            $result->bindParam(':idUsuario',$this->idUsuario);
            $result->bindParam(':nombreUsuario',$this->nombreUsuario);
            $result->bindParam(':apellidoUsuario',$this->apellidoUsuario);
            $result->bindParam(':cedulaUsuario',$this->cedulaUsuario);
            $result->bindParam(':telefonoUsuario',$this->telefonoUsuario);
            $result->bindParam(':emailUsuario',$this->emailUsuario);
            $result->bindParam(':usuario',$this->usuario);
            /* $result->bindParam(':rolUsuario',$this->rolUsuario); */
            $result->bindParam(':passwordUsuario',$this->passwordUsuario);
            $save = $result->execute(); // Ejecuta la consulta - Retorna true ó false.
            return $save;
        }
        
        public function delete(int $id){// Método que se encarga de eliminar un registro dependiendo del id recibido.
            $query = $this->DB()->query("DELETE FROM $this->table WHERE idUsuario = '$id'"); // Consulta SQL.
            return $query; // Retorna la operacion.
        }
        
        public function getAll(){
            $query = $this->DB()->query("SELECT * FROM $this->table ORDER BY idUsuario ASC"); // Consulta SQL.
            if($query){ // Evalua la cansulta
                if($query->rowCount() != 0) { // Si existe al menos un registro...
                    while($row = $query->fetch(PDO::FETCH_OBJ)) { // Recorre un array (tabla) fila por fila.
                        $resultset[] = $row; // Llena el array con cada uno de los registros de la tabla.
                    }
                }
                else{ // Sino...
                    $resultset = null; // Almacena null
                }
            }
            return $resultset; // Finalmente retornla el arreglo con los elementos.
        }

        public function getById(int $id){
            $query = $this->DB()->query("SELECT * FROM $this->table WHERE idUsuario = '$id'"); // Consulta SQL
            if($row = $query->fetch(PDO::FETCH_OBJ)){ // Si el objeto existe en la tabla
                $register = $row; // Lo almacena en $register
            }
            return $register; // Y finalmente, lo retorna.
        }
    }
?>