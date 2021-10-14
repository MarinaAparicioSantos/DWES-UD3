<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>

    <?php

    $nombre="";
    $apellidos="";
    $direccion="";
    $instituto="";
    $estudiosElegidos="";

    $errorNombre="";
    $errorApellidos="";
    $errorDireccion="";
    $errorInstituto="";
    $errorEstudiosElegidos="";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["nombre"])){
            $errorNombre = "el nombre debe estar relleno";
        }
        else{
            $nombre= $_POST["nombre"];
        }
        if(empty($_POST["apellidos"])){
            $errorApellidos = "el apellido debe estar relleno";
        }
        else{
            $apellidos=$_POST["apellidos"];
        }
        if(empty($_POST["direccion"])){
            $errorDireccion = "la direccion debe estar rellena";
        }
        else{
            $direccion=$_POST["direccion"];
        }
        if(empty($_POST["instituto"])){
            $errorInstituto = "el instituto debe estar relleno";
        }
        else{
            $instituto=$_POST["instituto"];
        }
        if(empty($_POST["estudiosElegidos"])){
            $errorEstudiosElegidos = "estudios elegidos debe estar relleno";
        }
        else{
            $estudiosElegidos=$_POST["estudiosElegidos"];
        }
        if(!preg_match('^[I][E][S]', $instituto)){
            $errorInstituto = "el'<b>$instituto</b>' debe comenzar por IES.";
        }
        if(isset($_POST["radio"])){
            echo "Campo de radio enviado: ".$_POST["radio"]."<br/>";
        }else{
            echo "El campo de radio no ha sido activado. Por lo tanto, no
            se ha recibido ningún valor de este.<br/>";
        }
        if(isset($_POST["radio"])){
            echo "Campos de checkbox enviados:";
    
            foreach($_POST["radio"] as $valorRadio){
                echo " ".$valorRadio;
            }
        
        }
        if(isset($_POST["checkbox"])){
            echo "Campo de checkbox enviado: ".$_POST["checkbox"]."<br/>";
        }else{
            echo "El campo de checkbox no ha sido activado. Por lo tanto, no
            se ha recibido ningún valor de este.<br/>";
        }
        if(isset($_POST["checkbox"])){
            echo "Campos de checkbox enviados:";
    
            foreach($_POST["checkbox"] as $valorCheckbox){
                echo " ".$valorCheckbox;
            }
        }
        if(isset($_POST["diaSemana"])){
            echo "Campos de SELECT Multiple enviados:";
            foreach($_POST["diaSemana"] as $valorSelectMultiple){
                echo " ".$valorSelectMultiple;
            }
            echo "<br/>";
        }else{
            echo "Ninguno de las opciones de la lista han sido seleccionadas.";
        }

        $nombre = stripslashes($nombre);
        $nombre = strip_tags($nombre);
        $nombre = htmlspecialchars($nombre);

        $apellidos = stripslashes($apellidos);
        $apellidos = strip_tags($apellidos);
        $apellidos = htmlspecialchars($apellidos);

        $direccion = stripslashes($direccion);
        $direccion = strip_tags($direccion);
        $direccion = htmlspecialchars($direccion);

    }

    ?>

    <fieldset>

        <legend>Formulario de opciones</legend>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

            <p>
                <label for="usuario">Nombre</label>
                <input type="text" name="usuario" value="<?php echo $nombre;?>"/>
                <span style="color:red"><?php echo $errorNombre?></span>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="<?php echo $apellidos;?>"/>
                <span style="color:red"><?php echo $errorApellidos?></span>
            </p>
            <p>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value="<?php echo $direccion;?>"/>
                <span style="color:red"><?php echo $errorDireccion?></span>
            </p>

            <input type="radio" name="transporte" value="1">Wifi
            <input type="radio" name="transporte" value="2">Cable
            <input type="radio" name="transporte" value="3">Fibra

            <p>
                <label for="Instituto">Instituto</label>
                <input type="text" name="Instituto" value="<?php echo $instituto;?>"/>
                <span style="color:red"><?php echo $errorInstituto?></span>
            </p>

            <p>
                <label for="estudiosElegidos">Estudios elegidos</label>
                <input type="text" name="estudiosElegidos" value="<?php echo $estudiosElegidos;?>"/>
                <span style="color:red"><?php echo $errorEstudiosElegidos?></span>
            </p>


            <select name="diaSemana" size="4" multiple>

                <option>Lunes</option>

                <option>Martes</option>

                <option>Miercoles</option>

                <option>Jueves</option>

                <option>Viernes</option>


            </select>
        </form>


    </fieldset>

    <fieldset>

        <legend>Preferencias</legend>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

        <input type="checkbox" name="asignaturas" value="1">Historia

        <input type="checkbox" name="asignaturas" value="1">Geografía

        <input type="checkbox" name="asignaturas" value="1">Lengua

        <input type="checkbox" name="asignaturas" value="1">Matemáticas

        <br>

        <textarea placeholder="Inserta aquí el texto" cols="38" rows="6"></textarea>

        <p>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
            
        </form>

    </fieldset>
    
</body>
</html>