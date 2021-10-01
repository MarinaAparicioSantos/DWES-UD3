<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>
<body>
    
<?php

$dia = 4;

switch($dia){

    case 1:
        echo "lunes";
        break;

    case 2:
        echo "martes";
        break;

    case 3:
        echo "miércoles";
        break;

    case 4:
        echo "jueves";
        break;

    case 5:
        echo "viernes";
        break;

    case 6:
        echo "sábado";
        break;

    case 7:
         echo "domingo";
         break;

    default:
    echo $dia, " no es un dia de la semana";
    break;


}


?>

</body>
</html>