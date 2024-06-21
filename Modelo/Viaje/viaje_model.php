<?php
include_once "../../Modelo/DB/conectar.php";

class ViajeModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerViajes() {
        $sql = "SELECT id_viaje, hora_inicio, hora_fin, nombre_conductor, nombre_pasajero FROM viaje
       INNER JOIN conductor ON conductor.id_conductor= viaje.conductor_id 
       INNER JOIN pasajero ON pasajero.id_pasajero= viaje.pasajero_id";
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
