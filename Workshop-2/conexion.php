<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "workshop2";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexion fallida: " . $conexion->connect_errno);
}

// Para los siguientes Workshops usar $conexion->real_escape_string($_POST['nombre']) para recoger el valor de manera segura y tmb ver como funciona prepare para las consultas, inserciones y elimaciones de sql, aqui tampoco se esta validando si el insert fue exitoso o no
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql_insert = "INSERT INTO usuario (nombre, apellido, correo, telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

    $conexion->query($sql_insert);
}

$sql_select = "SELECT * FROM usuario";
$result = $conexion->query($sql_select);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo
        "<tr>
            <td>{$row['nombre']}</td>
            <td>{$row['apellido']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['telefono']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay usuarios registrados</td></tr>";
}

$conexion->close();
?>