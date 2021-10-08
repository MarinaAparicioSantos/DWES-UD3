<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php



if (empty($_POST["usuario"])){

    $errorUsuario = "el usuario debe estar relleno";
}
else{
    $usuario= $_POST["usuario"];
}
if(empty($_POST["contrasenya"]))
{
   $errorContrasenya = "la contraseña debe estar rellena";
}
else{
    $contrasenya=$_POST["contrasenya"];
}




$usuario = $_POST["usuario"];
$contrasenya = $_POST["contrasenya"];

$usuario="";
$contrasenya="";

$usuario = strip_tags($usuario);

echo $usuario;

$usuario = stripslashes($usuario);

echo $usuario;

$usuario = htmlspecialchars($usuario);

echo $usuario;

 


// if(preg_match ("(?=\w*\[0-9)(?=\w*[A-Z])\S{8,}$", $contrasenya )){

//     echo "contraseña valida";
// }

?>


    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="_post">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red">*</span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>
            <span style="color:red">*</span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>



</body>
</html>