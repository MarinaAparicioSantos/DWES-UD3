<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>

<table border="1">
<?php

    $contador;

    for($i=0; $i < 10; $i++){
        if($i%2==0){

            echo "<tr style='background-color:white'>";
        }else{

            echo "<tr style='background-color:green'>";
        }

        for ($j=0; $j < 10; $j++){

            $contador++;
            echo "<td>" . $contador."</td>";

        }

        echo "</tr>";


    }

?>
</table>
</body>
</html>