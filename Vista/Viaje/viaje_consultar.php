<?php
require "../../Controlador/Viaje/viaje_controller.php";
$viajeController = new ViajeController();
$viajes = $viajeController->obtenerViajes();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta de viajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../Styles.css"  rel="stylesheet" >
     <link href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css"  rel="stylesheet" >
     <script type="text/javascript" src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
     
</head>
<body>
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Conductor</th>
      <th scope="col">Pasajero</th>
      <th scope="col">Hora inicio</th>
      <th scope="col">Hora de llegada</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($viajes as $viaje): ?>
    <tr>
      <th scope="row"><?= $viaje['nombre_conductor']; ?></th>
      <td><?= $viaje['nombre_pasajero']; ?></td>
      <td><?= $viaje['hora_inicio']; ?></td>
      <td><?= $viaje['hora_fin']; ?></td>
    </tr>
   
  <?php endforeach; ?>
  </tbody>
</table>
</body>
<script>
        $(document).ready(function() {
            let table = new DataTable('#myTable');
        });
    </script>
</html>

<style>

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
  border-collapse: collapse;
}

.table th, .table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
  background-color: #f8f9fa;
  font-weight: bold;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .table {
  background-color: #ffffff;
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-sm th, .table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th, .table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th, .table-bordered thead td {
  border-bottom-width: 2px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #000000;
}

.table-dark.table-bordered {
  border: 0;
}
</style>