<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 4</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    echo "<h1>Números primos entre 1 y 100 </h1>";
    for ($i = 1; $i <= 1000; $i++) {
        $validacion = true;

        if ($i < 2) {
            $validacion = false;
            continue;
        }

        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j == 0) {
                $validacion = false;
                continue;
            }
        }

        if ($validacion) {
            echo $i . " ";
        }
    }


    $numero_centencia = 5;
    $indece = 1;
    $impresion = '*';
    while ( $indece <= $numero_centencia ) {
        echo "<p>$impresion</p>";
        $indece++;
        $impresion .= '*';
    }

    $cantidad_cruz = $numero_centencia + 1;
    $indece = 1;
    $cantidad_cruz_impresion = '';
    while ( $indece <= $cantidad_cruz ) {
        $cantidad_cruz_impresion .= '+';
        $indece++;
    }
    echo "<p>$cantidad_cruz_impresion</p>";

    $indece = $numero_centencia;
    while ($indece > 0) {
        $impresion = substr($impresion, 0, -1);
        echo "<p>$impresion</p>";
        $indece--;
    }
?>
</body>
</html>
