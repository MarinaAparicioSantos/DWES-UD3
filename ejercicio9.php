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
    $diaActual = Date("Y-m-d");
    $edad_diff = date_diff(date_create($fechaNacimiento),date_create($diaActual));
    var_dump($edad_diff);
    echo "<br>";
    echo $edad_diff ->y;


    if($edad_diff ->y < 18){

        echo "No puedes pasar, eres menor de edad.";
    }else  if($edad_diff ->y >= 18  && $edad_diff ->y <=65){

        echo "Puedes pasar";


    }else  if($edad_diff ->y >65){

        echo "Eres demasiado mayor para pasar";

    }else{

        echo "Dato incorrecto";
    }

?>
    
</body>
</html>
