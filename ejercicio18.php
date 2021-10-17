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

$validador = true;

$poblacion="";
$codigoPostal="";
$provincias="";
$errorPoblacion="";
$errorCodigoPostal="";
$errorProvincias="";
$placehorder="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    if (empty($_POST["poblacion"])){
        $errorPoblacion = "el poblacion debe estar relleno";
        $validador = false;
    }
    else{
        $poblacion= $_POST["poblacion"];
    }
    if(empty($_POST["codigoPostal"])){
        $errorCodigoPostal = "el codigoPostal debe estar relleno";
        $validador = false;
    }
    else{
        $codigoPostal=$_POST["codigoPostal"];
    }

    if(!preg_match("/^[a-zA-Z]+$/", $poblacion)){
        $errorPoblacion = "el '<b>$poblacion</b>' no es correcto, debe ser solo letras";
        $validador = false;
    }

    if(!preg_match("/^[0-9]+$/", $codigoPostal)){
        $errorCodigoPostal = "el '<b>$codigoPostal</b>' no es correcto, debe ser solo numeros";
        $validador = false;
    }
    


    if(isset($_POST["provincias"])){

        $provincias = $_POST["provincias"];

    } else{

        $errorProvincias = "Ninguno de los 8 radios ha sido activado.<br>";
        $validador = false;
    }

    if ($validador) { // SI ES TRUE
        header("Location:/DWES-UD3/correcto.php");
    }


    $poblacion = stripslashes($poblacion);
    $poblacion = strip_tags($poblacion);
    $poblacion = htmlspecialchars($poblacion);

    $codigoPostal = stripslashes($codigoPostal);
    $codigoPostal = strip_tags($codigoPostal);
    $codigoPostal = htmlspecialchars($codigoPostal);

    $placehorder = stripslashes($placehorder);
    $placehorder = strip_tags($placehorder);
    $placehorder = htmlspecialchars($placehorder);
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

        <input type="radio" name="provincias" value="<?php echo $provincias = "1";?>">Granada
        <input type="radio" name="provincias" value="<?php echo $provincias = "2";?>">Huelva
        <input type="radio" name="provincias" value="<?php echo $provincias = "3";?>">Sevilla
        <input type="radio" name="provincias" value="<?php echo $provincias = "4";?>">Jaén
        <input type="radio" name="provincias" value="<?php echo $provincias = "5";?>">Córdoba
        <input type="radio" name="provincias" value="<?php echo $provincias = "6";?>">Málaga
        <input type="radio" name="provincias" value="<?php echo $provincias = "7";?>">Cádiz
        <input type="radio" name="provincias" value="<?php echo $provincias = "8";?>">Almería
        <span style="color:red"><?php echo $errorProvincias?></span>

        <br>

        <textarea placeholder="Inserta aquí la descripción." cols="38" rows="6" value=<?php $placehorder;?>></textarea>

        <br>

        <input type="submit" name="enviar" value="Aceptar"/>
        <input type="reset" name="cancelar" value="Cancelar"/>

    </form>
    
</body>
</html>