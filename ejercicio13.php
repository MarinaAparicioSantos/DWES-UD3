<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 13</title>
</head>
<body>


    <?php

        $sueldo = 40000;
        $anios = 9;
        $descSueldo = 0;

        if($anios > 10){

            $descSueldo = 10;
        }

        elseif($anios <= 10 && $anios > 5){

            $descSueldo = 7;
        }

        elseif($anios <= 5 && $anios > 3){

            $descSueldo = 5;
        }

        elseif($anios <= 3){

            $descSueldo = 3;
        }

        $sueldo += $sueldo * ($descSueldo/100);

        echo "El sueldo es de ",$sueldo,"€.";

    ?>
    
</body>
</html>