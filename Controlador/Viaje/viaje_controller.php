<?php
include_once "../../Modelo/DB/conectar.php";
include_once "../../Modelo/Conductor/conductor_model.php";

class ViajeController {
    private $db;
    private $conductorModel;

    public function __construct() {
        $this->db = new MySQLDB('localhost', 'root', 'root', 'proyecto');
        $this->conductorModel = new ConductorModel($this->db);
    }

    public function obtenerConductores(){
        return $this->conductorModel->obtenerConductores();
    }
}
?>