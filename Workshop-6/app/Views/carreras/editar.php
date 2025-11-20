<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Workshop6</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

</head>

<body>
    <h1>Editar carrera</h1>

    <form action="/carreras/actualizar" method="post">
        <input type="hidden" name="id" value="<?= $carrera['id'] ?>">

        <label for="nombre">Nombre de la carrera</label> <br>
        <input type="text" name="nombre" value="<?= $carrera['nombre'] ?>" required>
        
        <input type="submit" value="Actualizar">
    </form>

    <br>
    <br>
    <a href="/carreras/index">Volver</a>
</body>

</html>
