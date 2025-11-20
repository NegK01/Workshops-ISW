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
    <h1>Carreras</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $carrera): ?>
                <tr>
                    <td><?= $carrera['id'] ?></td>
                    <td><?= $carrera['nombre'] ?></td>
                    <td><a href="/carreras/editar/<?= $carrera['id'] ?>">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <br>
    <a href="/estudiantes/index">Ver estudiantes</a> o
    <a href="/carreras/crear">Agregar nueva carrera</a>
</body>

</html>
