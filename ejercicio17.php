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
    $placehorder="";

    $errorNombre="";
    $errorApellidos="";
    $errorDireccion="";
    $errorInstituto="";
    $errorEstudiosElegidos="";
    $errorDiaSemana="";
    $errorCheckbox="";
    $errorInternet="";


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


        if(empty($_POST["internet"])){
  
            $errorInternet =  "Ninguno de los 3 radios ha sido activado.<br>";
        }

        if(empty($_POST["instituto"])){
            $errorInstituto = "instituto debe estar relleno";
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


        if(!preg_match('(IES.*)', $instituto)){
            $errorInstituto = "el instituto '<b>$instituto</b>' no es correcto, debe contener IES";
        }


        if(empty($_POST["diaSemana"])){
  
            $errorDiaSemana = "Ninguno de los dias de la semana ha sido elegido.<br>";
        }
        


        if(empty($_POST["camposCheckbox"])){
  
            $errorCheckbox = "Ninguno de los 4 checkbox ha sido activado.<br>";
        }

         
/*         if(isset($_REQUEST["camposCheckbox"])){
   
        } else{

            $errorCheckbox = "Ninguno de los 4 checkbox ha sido activado.<br>";
        } */
       

        $nombre = stripslashes($nombre);
        $nombre = strip_tags($nombre);
        $nombre = htmlspecialchars($nombre);

        $apellidos = stripslashes($apellidos);
        $apellidos = strip_tags($apellidos);
        $apellidos = htmlspecialchars($apellidos);

        $direccion = stripslashes($direccion);
        $direccion = strip_tags($direccion);
        $direccion = htmlspecialchars($direccion);

        $estudiosElegidos = stripslashes($estudiosElegidos);
        $estudiosElegidos = strip_tags($estudiosElegidos);
        $estudiosElegidos = htmlspecialchars($estudiosElegidos);

        $placehorder = stripslashes($placehorder);
        $placehorder = strip_tags($placehorder);
        $placehorder = htmlspecialchars($placehorder);

    }

    ?>

    <fieldset>

        <legend>Formulario de opciones</legend>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre;?>"/>
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

            <input type="radio" name="internet" value="1">Wifi
            <input type="radio" name="internet" value="2">Cable
            <input type="radio" name="internet" value="3">Fibra
            <span style="color:red"><?php echo $errorInternet?></span>


            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value="<?php echo $instituto;?>"/>
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
            <span style="color:red"><?php echo $errorDiaSemana?></span>


            <div>
                Historia<input type="checkbox" name="camposCheckbox[]" value="1">
                Geografia<input type="checkbox" name="camposCheckbox[]" value="2">
                Lengua<input type="checkbox" name="camposCheckbox[]" value="3">
                Matematicas<input type="checkbox" name="camposCheckbox[]" value="4">
            </div>
            <span style="color:red"><?php echo $errorCheckbox?></span>


            <textarea placeholder="Inserta aquí el texto" cols="38" rows="6" value=<?php $placehorder;?>></textarea>

        <p>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
            
        </form>

    </fieldset>
    
</body>
</html>