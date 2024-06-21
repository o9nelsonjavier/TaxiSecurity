<?php
include_once "../../Modelo/DB/conectar.php";
include_once "../../Modelo/Conductor/conductor_model.php";
include_once "../../Modelo/Pasajero/pasajero_model.php";
include_once "../../Modelo/Viaje/viaje_model.php";

class ViajeController {
    private $db;
    private $conductorModel;
    private $pasajeroModel;
    private $viajeModel;

    public function __construct() {
        $this->db = new MySQLDB('localhost', 'root', '', 'taxi_security');
        $this->conductorModel = new ConductorModel($this->db);
        $this->pasajeroModel = new PasajeroModel($this->db);
        $this->viajeModel = new ViajeModel($this->db);
    }

    public function obtenerConductores(){
        return $this->conductorModel->obtenerConductores();
    }

    public function obtenerPasajeros(){
        return $this->pasajeroModel->obtenerPasajeros();
    }

    public function obtenerViajes(){
        return $this->viajeModel->obtenerViajes();
    }

}

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fin = $_POST["hora_fin"];
    $conductor_id= $_POST["conductor_id"];
    $pasajero_id= $_POST["pasajero_id"];
   
    // Ejemplo de uso
    $db = new MySQLDB('localhost', 'root', '', 'taxi_security');

    // Prepara la consulta para insertar los datos
    $sql = "INSERT INTO viaje (
        hora_inicio,
        hora_fin,
        conductor_id,
        pasajero_id)
        VALUES ('$hora_inicio', '$hora_fin', '$conductor_id', '$pasajero_id')";

    // Ejecuta la consulta
    if ($db->query($sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el conductor: " . $conexion->error;
    }

    // Cerrar la conexión cuando hayas terminado
    $db->close();
}


?>