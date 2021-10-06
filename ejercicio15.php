<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>

    <?php
        
        $productos = [];
        $productos[] = array("Nombre"=>"Pienso para perros", "Precio"=>"12€", "Stock"=>"100", "Identificador"=>"4723");
        $productos[] = array("Nombre"=>"Nestea", "Precio"=>"2€", "Stock"=>"90", "Identificador"=>"5234");
        $productos[] = array("Nombre"=>"Agua", "Precio"=>"1€", "Stock"=>"1000", "Identificador"=>"8456");
        echo $productos[0]["Nombre"]," " ,$productos[0]["Precio"]," " , $productos[0]["Stock"]," " ,$productos[0]["Identificador"];
        echo "<br>";
        echo $productos[1]["Nombre"], " " ,$productos[1]["Precio"], " " ,$productos[1]["Stock"]," " ,$productos[1]["Identificador"];
        echo "<br>";
        echo $productos[2]["Nombre"], " " ,$productos[2]["Precio"], " " ,$productos[2]["Stock"]," " ,$productos[2]["Identificador"];
        echo "<br>";
        var_dump($productos);
        echo "<br>";
        
        echo "<table border = \"1\">";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Stock</th>";
        echo "<th>Id</th>";
        echo "</tr>";

        foreach ($productos as &$uno) {

            
            echo "<tr>";

            echo "<td>$uno[Nombre]</td>";
            echo "<td>$uno[Precio]</td>";
            echo "<td>$uno[Stock]</td>";
            echo "<td>$uno[Identificador]</td>";

            echo "</tr>";
            
        }

        echo "</table>";

        
    ?>
    
</body>
</html>