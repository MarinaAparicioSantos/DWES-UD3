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
        
    $poblacion = $_POST["poblacion"];
    $poblacion = stripslashes($poblacion);
    $poblacion = strip_tags($poblacion);
    $poblacion = htmlspecialchars($poblacion);
    if (empty($poblacion)){
        $errorPoblacion = "el poblacion debe estar relleno";
        $validador = false;
    }
    else if(!preg_match("/^[a-zA-Z]+$/", $poblacion)){
        $errorPoblacion = "el '<b>$poblacion</b>' no es correcto, debe ser solo letras";
        $validador = false;
    }


    $codigoPostal = $_POST["codigoPostal"];
    $codigoPostal = stripslashes($codigoPostal);
    $codigoPostal = strip_tags($codigoPostal);
    $codigoPostal = htmlspecialchars($codigoPostal);
    if(empty($codigoPostal)){
        $errorCodigoPostal = "el codigoPostal debe estar relleno";
        $validador = false;
    }
   else if(!preg_match("/^[0-9]+$/", $codigoPostal)){
        $errorCodigoPostal = "el '<b>$codigoPostal</b>' no es correcto, debe ser solo numeros";
        $validador = false;
    }
    


    if(isset($_POST["provincias"])){

        $provincias = $_POST["provincias"];

    } else{

        $errorProvincias = "Ninguno de los 8 radios ha sido activado.<br>";
        $validador = false;
    }

/*         if (isset($_POST["provincias"])) {
            foreach ($_POST["provincias"] as $valorRadio) {
                echo $valorRadio;
            }
        } else {
            $errorProvincias = "Indique su provincia, por favor";
        }  */

    if ($validador) { // SI ES TRUE
        header("Location:/DWES-UD3/correcto.php");
    }


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

        <input type="radio" name="provincias" value="granada">
        <label for="granada">Granada</label>
        <input type="radio" name="provincias" value="huelva">
        <label for="huelva">Huelva</label>
        <input type="radio" name="provincias" value="sevilla">
        <label for="sevilla">Sevilla</label>
        <input type="radio" name="provincias" value="jaen">
        <label for="jaen">Jaén</label>
        <input type="radio" name="provincias" value="cordoba">
        <label for="cordoba">Córdoba</label>
        <input type="radio" name="provincias" value="malaga">
        <label for="malaga">Málaga</label>
        <input type="radio" name="provincias" value="cadiz">
        <label for="cadiz">Cádiz</label>
        <input type="radio" name="provincias" value="almeria">
        <label for="cadiz">Cádiz</label>
        <span style="color:red"><?php echo $errorProvincias?></span>

        <br>

        <textarea placeholder="Inserta aquí la descripción." cols="38" rows="6" value=<?php $placehorder;?>></textarea>

        <br>

        <input type="submit" name="enviar" value="Aceptar"/>
        <input type="reset" name="cancelar" value="Cancelar"/>

    </form>
    
</body>
</html>