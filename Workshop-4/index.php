<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 250px;
        }

        form>input,
        form>select {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form action="login.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>

        <label for="provincia">Provincia:</label>
        <select name="provincia" id="provincia" required>
            <option value="">Seleccione una provincia</option>
            <?php
            include 'conexion.php';
            // POO Abstraccion
            $conexion = new Conexion();
            $provincia = new Provincia($conexion);
            $provincia->mostrar();
            ?>
        </select>

        <input type="submit" value="Enviar" />
    </form>
</body>

</html>