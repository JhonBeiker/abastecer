<?php
    interface BaseModel{ // Interface que contiene los metodos a implementar
        // Definicion de métodos.
        public function insert();
        public function update();
        public function delete(int $id);
        public function getAll();
    }
?>