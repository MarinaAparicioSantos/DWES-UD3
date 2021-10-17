<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>

    <?php


    $meses = [];

    $meses[] = "Enero";
    $meses[] = "Febrero";
    $meses[] = "Marzo";

    var_dump($meses);
    echo "<br>";
    print_r($meses);
    
    echo "<br>";

    echo "El array contiene ",count($meses), " meses.";

    echo "<br>";

    $meses[] = 7;

    $meses[] = "Abril";

    $meses[] = true;

    $meses[] = "Junio";

    var_dump($meses);
    echo "<br>";
    print_r($meses);  
    echo "<br>";
    echo "El array contiene ",count($meses), " meses.";
    unset($meses[3]);
    echo "<br>";
    var_dump($meses);
    echo "<br>";
    $meses[5] = "Mayo";
    $meses[] = "Julio";
    $meses[] = "Agosto";
    $meses[] = "Septiembre";
    $meses[] = "Octubre";
    $meses[] = "Noviembre";
    $meses[] = "Diciembre";

    var_dump($meses);
    echo "<br>";
    echo "El array contiene ",count($meses), " meses.";
    ?>
    
</body>
</html>