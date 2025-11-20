<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Meta para recargar la pagina cada 1 segundo -->
        <meta http-equiv="refresh" content="1">
        <title>Document</title>
    </head>
    <body
        style="
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 90vh;
            ">
        <h1>PHP</h1>
        <p>
            <?php
            echo date("d-m-Y H:i:s");
            ?>
        </p>
        <a href="../Workshop-1/index.html">Fecha y hora (HTML)</a>
    </body>
</html>