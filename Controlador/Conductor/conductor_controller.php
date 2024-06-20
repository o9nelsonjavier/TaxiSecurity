<?php
include_once "../../Modelo/DB/conectar.php";

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre_conductor"];
    $cedula = $_POST["cedula_conductor"];
    $correo = $_POST["correo_conductor"];
    $celular = $_POST["celular_conductor"];
    $huella = $_POST["huella_conductor"];
    $pin = $_POST["pin_conductor"];

    // Ejemplo de uso
    $db = new MySQLDB('localhost', 'root', '', 'taxi_security');

    // Prepara la consulta para insertar los datos
    $sql = "INSERT INTO conductor (
        nombre_conductor,
        cedula_conductor,
        correo_conductor,
        celular_conductor,
        huella_conductor,
        pin_conductor)
        VALUES ('$nombre', '$cedula', '$correo', '$celular', '$huella', '$pin')";

    // Ejecuta la consulta
    if ($db->query($sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el conductor: " . $conexion->error;
    }

    // Cerrar la conexión cuando hayas terminado
    $db->close();
}

