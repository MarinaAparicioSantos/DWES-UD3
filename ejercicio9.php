<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>

<?php

    $fechaNacimiento = "31-05-2000";

    $fechaActual = date("d-m-Y");
   
    echo $fechaActual;

    echo "<br>";
    $separadaNacimiento = explode("-", $fechaNacimiento);
    $separadaActual = explode("-", $fechaActual);

    var_dump($separadaActual[2]-$separadaNacimiento[2]);
    echo "<br>";


    if(($separadaActual[2]-$separadaNacimiento[2])>=18){

        echo "Puedes pasar";

    }
    
    if(($separadaActual[2]-$separadaNacimiento[2])<18){

        echo "No puedes pasar";
    }
?>
    
</body>
</html>