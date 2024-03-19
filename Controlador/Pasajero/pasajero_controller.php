<?php
include_once "../../Modelo/DB/conectar.php";

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre_pasajero"];
    $cedula = $_POST["cedula_pasajero"];
    $correo = $_POST["correo_pasajero"];
    $celular = $_POST["celular_pasajero"];
    $huella = $_POST["huella_pasajero"];
    $pin = $_POST["pin_pasajero"];

    // Ejemplo de uso
    $db = new MySQLDB('localhost', 'root', '', 'taxi_security');

    // Prepara la consulta para insertar los datos
    $sql = "INSERT INTO pasajero (
        nombre_pasajero,
        cedula_pasajero,
        correo_pasajero,
        celular_pasajero,
        huella_pasajero,
        pin_pasajero)
        VALUES ('$nombre', '$cedula', '$correo', '$celular', '$huella', '$pin')";

    // Ejecuta la consulta
    if ($db->query($sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el pasajero: " . $conexion->error;
    }

    // Cerrar la conexión cuando hayas terminado
    $db->close();
}

