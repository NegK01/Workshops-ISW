<?php
// get current folder and go one level up to include connection.php
// get the current directory
$currentDir = dirname(__FILE__);
// go one level up
$parentDir = dirname($currentDir);
// include the connection.php file
include($parentDir . '/common/connection.php');

if ($argc < 2) {
    echo "Usage: php validateActiveSessions.php <hours>\n";
    exit(1);
}

$hours = (int) $argv[1];

if ($hours <= 0) {
    echo "El valor de horas debe ser mayor a cero.\n";
    exit(1);
}

echo "Inactivando usuarios con ultimo acceso anterior a {$hours} horas.\n";

// Marcar como inactivos a los usuarios que sobrepasan o igualan el tiempo de inactividad
$sql = "UPDATE users SET 
        status = 'inactive' 
        WHERE last_login_datatime IS NOT NULL 
        AND last_login_datatime <= DATE_SUB(NOW(), INTERVAL {$hours} HOUR)
";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "Error al actualizar usuarios: " . mysqli_error($conn) . "\n";
    mysqli_close($conn);
    exit(1);
}

echo "Usuarios actualizados: " . mysqli_affected_rows($conn) . "\n";

mysqli_close($conn);
?>