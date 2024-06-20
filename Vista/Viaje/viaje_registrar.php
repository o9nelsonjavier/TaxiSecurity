<?php
require "../../Controlador/Viaje/viaje_controller.php";
$viajeController = new ViajeController();
$conductores = $viajeController->obtenerConductores();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Viaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../Styles.css"  rel="stylesheet" >
</head>
<body>
    <div class="container-fluid" id="divFondo">
        <div class="divFondoFormulario">
            <h2 class="text-light"> Registro viaje</h2>
            <form action="../../Controlador/Viaje/viaje_controller.php" method="POST">

                <input type="datetime-local" class="form-control" placeholder="Hora de inicio" id="hora_inicio" name="hora_inicio" required><br>

                <input type="datetime-local" class="form-control" placeholder="Hora de fin" id="hora_fin" name="hora_fin" required><br>

                <select class="form-control" name="conductor_id">
                    <?php foreach ($conductores as $conductor): ?>
                        <option value="<?= $conductor['id_conductor']; ?>"><?= $conductor['nombre_conductor']; ?></option>
                    <?php endforeach; ?>
                </select><br>

                <select class="form-control" name="conductor_id">
                    <?php foreach ($conductores as $conductor): ?>
                        <option value="<?= $conductor['id_conductor']; ?>"><?= $conductor['nombre_conductor']; ?></option>
                    <?php endforeach; ?>
                </select><br>

                <input type="submit" value="Registrarse" class="btnRegistro btn w-100">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
