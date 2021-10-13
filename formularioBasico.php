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
$usuario="";
$contrasenya="";
$errorUsuario="";
$errorContrasenya="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
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
        if(!preg_match('/\w{8,}/', $usuario)){
            $errorUsuario = "el usuario '<b>$usuario</b>' no es correcto, debe contener...";
        }
        if(!preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)){
            $errorContrasenya = "la contraseña '<b>$contrasenya</b>' no es correcta, debe contener...";
        }
        $usuario = stripslashes($usuario);
        $usuario = strip_tags($usuario);
        $usuario = htmlspecialchars($usuario);

        $contrasenya = stripslashes($contrasenya);
        $contrasenya = strip_tags($contrasenya);
        $contrasenya = htmlspecialchars($contrasenya);
    }
    ?>
    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" value="<?php echo $usuario;?>"/>
            <span style="color:red"><?php echo $errorUsuario;?> *</span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" value="<?php echo $contrasenya;?>"/>
            <span style="color:red"><?php echo $errorContrasenya?> *</span>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
    </form>
</body>
</html>