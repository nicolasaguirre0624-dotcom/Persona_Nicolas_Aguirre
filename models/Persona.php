<?php
require_once __DIR__ . '/../config/Database.php';

class Persona {
    private $db;
    private $table = "persona";

    public function __construct() {
        $database = new Database();
        $this->db = $database->conectar();
    }

    // Obtener todos los registros
    public function obtenerTodas() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}