<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Pasajero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../Styles.css"  rel="stylesheet" >
</head>
<body>
    <div class="container-fluid" id="divFondo">
        <div class="divFondoFormulario">
            <h2 class="text-light"> Registro pasajero</h2>
            <form action="../../Controlador/Pasajero/pasajero_controller.php" method="POST">
                
                <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre_pasajero" required><br><br>

                
                <input type="text" class="form-control" placeholder="Cedula" id="cedula" name="cedula_pasajero" required><br><br>

                
                <input type="text" class="form-control"  placeholder="Correo" id="correo" name="correo_pasajero" maxlength="200"><br><br>

            
                <input type="text" class="form-control" placeholder="Celular" id="celular" name="celular_pasajero" required><br><br>

            
                <input type="text" class="form-control" placeholder="Huella" id="huella" name="huella_pasajero" required><br><br>

                
                <input type="number" class="form-control" placeholder="Pin" id="pin" name="pin_pasajero" required><br><br>

                <input type="submit" value="Registrarse" class="btnRegistro btn w-100">
            </form>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
