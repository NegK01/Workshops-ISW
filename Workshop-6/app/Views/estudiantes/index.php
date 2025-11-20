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
    <h1>Estudiantes</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estudiante</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <td><?= $estudiante['id'] ?></td>
                    <td><?= $estudiante['nombre'] ?></td>
                    <td><?= $estudiante['nombre_carrera'] ?></td>
                    <td><a href="/estudiantes/editar/<?= $estudiante['id'] ?>">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <br>
    <a href="/carreras/index">Ver carreras</a> o 
    <a href="/estudiantes/crear">Agregar nuevo estudiante</a>
</body>

</html>
