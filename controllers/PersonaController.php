<?php
require_once __DIR__ . '/../models/Persona.php';

class PersonaController {
    private $model;

    public function __construct() {
        $this->model = new Persona();
    }

    public function listar() {
        return $this->model->obtenerTodas();
    }
}