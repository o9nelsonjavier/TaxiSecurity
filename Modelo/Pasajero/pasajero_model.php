<?php
include_once "../../Modelo/DB/conectar.php";

class PasajeroModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerPasajeros() {
        $sql = "SELECT id_pasajero, nombre_pasajero FROM pasajero";
        $result = $this->db->query($sql);

        $pasajeros = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pasajeros[] = $row;
            }
        }

        return $pasajeros;
    }
}
?>
