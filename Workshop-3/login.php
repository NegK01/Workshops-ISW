<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $provincia = $_POST['provincia'];

    $sql_insert = "INSERT INTO usuarios (nombre, apellido, provincia) VALUES ('$nombre', '$apellido', '$provincia')";

    $conexion->query($sql_insert);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php
        echo 'Bienvenido '. $_POST['nombre']. ' '. $_POST['apellido'];
        ?>
    </h2>
</body>
</html>