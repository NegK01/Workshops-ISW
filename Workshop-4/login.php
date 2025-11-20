<?php
include 'conexion.php';

// POO Abstraccion + Herencia
class Usuario extends ModeloConexion {
    private $nombre; // POO Encapsulacion
    private $apellido;
    private $provincia;

    public function __construct($conexion, $nombre, $apellido, $provincia) {
        parent::__construct($conexion);
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->provincia = $provincia;
    }

    public function guardar() { // POO Abstraccion
        $sql = "INSERT INTO usuarios (nombre, apellido, provincia) VALUES ('$this->nombre', '$this->apellido', '$this->provincia')";
        $this->conexion->conn->query($sql);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();
    $usuario = new Usuario($conexion, $_POST['nombre'], $_POST['apellido'], $_POST['provincia']);
    $usuario->guardar();
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
        echo 'Bienvenido ' . $_POST['nombre'] . ' ' . $_POST['apellido'];
        ?>
    </h2>
</body>

</html>