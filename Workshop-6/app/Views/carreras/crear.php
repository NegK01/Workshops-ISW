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
    <h1>Crear carrera</h1>

    <form action="/carreras/guardar" method="post">
        <label for="nombre">Nombre de la carrera</label> <br>
        <input type="text" name="nombre" placeholder="Musica" required>
        
        <input type="submit" value="Guardar">
    </form>

    <br>
    <br>
    <a href="/carreras/index">Volver</a>
</body>

</html>