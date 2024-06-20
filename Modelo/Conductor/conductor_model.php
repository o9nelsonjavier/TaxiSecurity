<?php
include_once "../../Modelo/DB/conectar.php";

class ConductorModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerConductores() {
        $sql = "SELECT id_conductor, nombre_conductor FROM conductor";
        $result = $this->db->query($sql);

        $conductores = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $conductores[] = $row;
            }
        }

        return $conductores;
    }
}
?>
