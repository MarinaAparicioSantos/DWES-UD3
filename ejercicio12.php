<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 12</title>
</head>
<body>

    <?php

    $dia = 31;
    $mes = 5;
    $anio = 2000;

    $sumFecha = $anio + $mes + $dia; 
    $tarot = 0;
    

    do {
    if ($sumFecha === 0) {
        $sumFecha = $tarot;
        $tarot = 0;
    }
   

    $tarot += $sumFecha % 10;
  
    $sumFecha = $sumFecha / 10;


} while ($sumFecha >= 1 || $tarot > 9);

    echo $tarot; 

    ?>
    
</body>
</html>