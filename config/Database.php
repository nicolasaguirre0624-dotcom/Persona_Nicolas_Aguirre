<?php

class Database {
    private $host = "localhost";
    private $dbname = "persona_nicolas_aguirre";
    private $user = "root";
    private $pwd = "";

    public function conectar(){
        try {
            $conexion = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4", $this->user, $this->pwd);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }
    }
}