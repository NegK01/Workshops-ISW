<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "workshop3";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}

function mostrarProvincias()
{
    global $conexion;
    $sql = "SELECT * FROM provincias";
    $result = $conexion->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
        }
    } else {
        echo "<option disabled>No hay provincias</option>";
    }
}
