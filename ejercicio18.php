<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>

<?php

$poblacion="";
$codigoPostal="";
$errorPoblacion="";
$errorCodigoPostal="";
$errorCheckbox="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    if (empty($_POST["poblacion"])){
        $errorPoblacion = "el poblacion debe estar relleno";
    }
    else{
        $poblacion= $_POST["poblacion"];
    }
    if(empty($_POST["codigoPostal"])){
        $errorCodigoPostal = "el codigoPostal debe estar relleno";
    }
    else{
        $codigoPostal=$_POST["codigoPostal"];
    }
    
    if(empty($_POST["provincias"])){
  
        $errorCheckbox = "Ninguno de los 8 radios ha sido activado.<br>";
    }

    $poblacion = stripslashes($poblacion);
    $poblacion = strip_tags($poblacion);
    $poblacion = htmlspecialchars($poblacion);

    $codigoPostal = stripslashes($codigoPostal);
    $codigoPostal = strip_tags($codigoPostal);
    $codigoPostal = htmlspecialchars($codigoPostal);
}

?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

        <p>
            <label for="poblacion">poblacion</label>
            <input type="text" name="poblacion" value="<?php echo $poblacion;?>"/>
            <span style="color:red"><?php echo $errorPoblacion?></span>
        </p>

        <p>
            <label for="codigoPostal">codigoPostal</label>
            <input type="text" name="codigoPostal" value="<?php echo $codigoPostal;?>"/>
            <span style="color:red"><?php echo $errorCodigoPostal?></span>
        </p>

        <input type="radio" name="provincias" value="1">Granada
        <input type="radio" name="provincias" value="2">Huelva
        <input type="radio" name="provincias" value="3">Sevilla
        <input type="radio" name="provincias" value="4">Jaén
        <input type="radio" name="provincias" value="5">Córdoba
        <input type="radio" name="provincias" value="6">Málaga
        <input type="radio" name="provincias" value="7">Cádiz
        <input type="radio" name="provincias" value="8">Almería
        <span style="color:red"><?php echo $errorCheckbox?></span>

        <br>

        <textarea placeholder="Inserta aquí la descripción." cols="38" rows="6"></textarea>

        <br>

        <input type="submit" name="enviar" value="Aceptar"/>
        <input type="reset" name="cancelar" value="Cancelar"/>

    </form>
    
</body>
</html>