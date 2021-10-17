<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>

    <style type="text/css">
        table { color: white; font-family: Verdana; background-color: red; }
    </style>
</head>
<body>


<table border="1">
        <tr>

            <th>2 elevado a </th>
            <th>Resultado</th>
        </tr>

        <?php

            $limite = 10;
            $numero =2;

            for($i = 0; $limite>=$i; $i++){

            $elevado = pow($numero,$i);
            echo "<tr>";
            echo "<td>$i</td>";
            echo"<td>$elevado</td>";
            echo "</tr>";

            }
        ?>

</table>

    
</body>
</html>