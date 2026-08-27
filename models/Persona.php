<?php
require_once __DIR__ . '/../config/Database.php';

class Persona {
    private $db;
    private $table = "persona";

    public function __construct() {
        $database = new Database();
        $this->db = $database->conectar();
    }

    public function obtenerTodas() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        // Variable de retorno
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}