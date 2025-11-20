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
    <h1>Editar estudiante</h1>

    <form action="/estudiantes/actualizar" method="post">
        <input type="hidden" name="id" value="<?= $estudiante['id'] ?>">

        <label for="nombre">Nombre del estudiante</label> <br>
        <input type="text" name="nombre" value="<?= $estudiante['nombre'] ?>" required> <br> <br>

        <label for="id_carrera">Carrera</label> <br>
        <select name="id_carrera" required>
            <?php foreach ($carreras as $carrera): ?>
                <option value="<?= $carrera['id'] ?>" <?= $carrera['id'] == $estudiante['id_carrera'] ? 'selected' : '' ?>>
                    <?= $carrera['nombre'] ?>
                </option>
            <?php endforeach; ?>
        </select> 

        <input type="submit" value="Actualizar">
    </form>

    <br>
    <br>
    <a href="/estudiantes/index">Volver</a>
</body>

</html>
