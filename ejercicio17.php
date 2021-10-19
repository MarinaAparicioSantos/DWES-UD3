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
    $internet="";
    $instituto="";
    $estudiosElegidos="";
    $placehorder="";
    $diaSemana="";
    $asignatura="";
 


    $errorNombre="";
    $errorApellidos="";
    $errorDireccion="";
    $errorInternet="";
    $errorInstituto="";
    $errorEstudiosElegidos="";
    $errorDiaSemana="";
    $errorAsignatura="";
   


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
/*         if (empty($_POST["nombre"])){
            $errorNombre = "el nombre debe estar relleno";
        }
        else{
            $nombre= $_POST["nombre"];
        } */

        $nombre = $_POST["nombre"];
        $nombre = strip_tags($nombre);
        $nombre = stripslashes($nombre);
        $nombre = htmlspecialchars($nombre);
        if (empty($nombre)) {
            $errorNombre = "<b>el nombre debe estar relleno</b><br>";
        }


/*         if(empty($_POST["apellidos"])){
            $errorApellidos = "el apellido debe estar relleno";
        }
        else{
            $apellidos=$_POST["apellidos"];
        } */

        $apellidos = $_POST["apellidos"];
        $apellidos = strip_tags($apellidos);
        $apellidos = stripslashes($apellidos);
        $apellidos = htmlspecialchars($apellidos);
        if (empty($apellidos)) {
            $errorApellidos = "<b>el apellidos debe estar relleno</b><br>";
        }



/*         if(empty($_POST["direccion"])){
            $errorDireccion = "la direccion debe estar rellena";
        }
        else{
            $direccion=$_POST["direccion"];
        } */

        $direccion = $_POST["direccion"];
            $direccion = strip_tags($direccion);
            $direccion = stripslashes($direccion);
            $direccion = htmlspecialchars($direccion);
            if (empty($direccion)) {
                $errorDireccion = "<b>la dirección debe estar rellena</b><br>";
            }


        
/*         if (isset($_POST["internet"])) {
            foreach ($_POST["internet"] as $valorRadio) {
                echo $valorRadio;
            }
        } else {
            $errorInternet = "Indique su conexión a Internet, por favor";
        } */

        if(isset($_POST["internet"])){
            $internet = $_POST["internet"];
        } else{
            $errorInternet = "<b>tienes que seleccionar una provincia</b><br>";
        }



/*         $instituto = $_POST["instituto"];

        if (empty($instituto)) {
            $errorInstituto = "Campo Obligatorio a rellenar";
        } else if (!preg_match("/^IES/", $instituto)) {
            $errorInstituto = "Error. Debe empezar por IES";
        } */

        $instituto = $_POST["instituto"];
        if (empty($instituto)) {
            $errorInstituto = "<b>Campo Obligatorio a rellenar</b><br>";
        } else if (!preg_match("/IES/", $instituto)) {
            $errorInstituto = "<b>Error. Debe empezar por IES</b><br>";
        }

        
/*         if(empty($_POST["estudiosElegidos"])){
            $errorEstudiosElegidos = "estudios elegidos debe estar relleno";
        }
        else{
            $estudiosElegidos=$_POST["estudiosElegidos"];
        } */

        $estudiosElegidos = $_POST["estudiosElegidos"];
        if (empty($estudiosElegidos)) {
            $errorEstudiosElegidos = "<b>estudios elegidos debe estar relleno</b><br>";
        }




        if(isset($_POST["diaSemana"])){
            $diaSemana = $_POST["diaSemana"];
            $diaSemana = strip_tags($diaSemana);
            $diaSemana = stripslashes($diaSemana);
            $diaSemana = htmlspecialchars($diaSemana);
           $diaSemana = $_POST["diaSemana"];
        }else{
            $errorDiaSemana = "Indique sus preferencias, por favor";
        }

/*         if (isset($_POST["diaSemana"])) {
            $diaSemana = $_POST["diaSemana"];
            $diaSemana = strip_tags($diaSemana);
            $diaSemana = stripslashes($diaSemana);
            $diaSemana = htmlspecialchars($diaSemana);
            if (empty($diaSemana)) {
                $errorDiaSemana = "<b>seleccione un dia</b><br>";
            }
        } else {
            $errorDiaSemana = "<b>seleccione un dia</b><br>";
        } */
        

        if(isset($_POST["asignatura"])){

            $asignatura = $_POST["asignatura"];
   
        } else{

            $errorAsignatura = "Ninguno de los 4 checkbox ha sido activado.<br>";
        }
       
/*         if(isset($_POST["asignatura"])){
            foreach($_POST["asignatura"] as $valorAsignatura){
                echo " ". $valorAsignatura;
            }
            echo "<br>";
        } else {
            $errorAsignatura = "Ninguno de los 4 checkbox ha sido activado";
        } */

    }

    $placehorder = stripslashes($placehorder);
    $placehorder = strip_tags($placehorder);
    $placehorder = htmlspecialchars($placehorder);

    ?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST"> <!-- AÑADIR SIEMPRE EL METODO -->
        <fieldset>
            <legend>Formulario de opciones</legend>
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorNombre;?></span>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="<?php echo $apellidos;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorApellidos;?></span>
            </p>
            <p>
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" value="<?php echo $direccion;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorDireccion;?></span>
            </p>
            <p>
                <input type="radio" id="wifi" name="internet" value="wifi"/>
                <label for="wifi">Wifi</label>
                <input type="radio" id="cable" name="internet" value="cable"/>
                <label for="cable">Cable</label>
                <input type="radio" id="fibra" name="internet" value="fibra"/>
                <label for="fibra">Fibra</label>
                <span style="color:red"><?php echo "*"; echo $errorInternet;?></span>
            </p>
            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value="<?php echo $instituto;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorInstituto;?></span>
            </p>
            <p>
                <label for="estudiosElegidos">Estudios</label>
                <input type="text" name="estudiosElegidos" value="<?php echo $estudiosElegidos;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorEstudiosElegidos;?></span>
            </p>
            <strong></strong>
            <select name="diaSemana" multiple>
                <option value="<?php echo $diaSemana;?>">Lunes</option>
                <option value="<?php echo $diaSemana;?>">Martes</option>
                <option value="<?php echo $diaSemana;?>">Miercoles</option>
                <option value="<?php echo $diaSemana;?>">Jueves</option>
                <option value="<?php echo $diaSemana;?>">Viernes</option>
            </select>
            <span style="color:red"><?php echo "*"; echo $errorDiaSemana;?></span>

        </fieldset>
        <fieldset>
            <legend>Preferencias</legend>
            <p>
                <input type="checkbox" id="historia" name="asignatura" value="historia"/>
                <label for="historia">Historia</label>
                <input type="checkbox" id="geografia" name="asignatura" value="geografia"/>
                <label for="geografia">Geografía</label>
                <input type="checkbox" id="lengua" name="asignatura" value="lengua"/>
                <label for="lengua">Lengua</label>
                <input type="checkbox" id="mates" name="asignatura" value="mates"/>
                <label for="mates">Matemáticas</label>
                <span style="color:red"><?php echo "*"; echo $errorAsignatura;?></span>
            </p>
            <p>
                <textarea name="placehorder" placeholder="Inserte aqui el texto" value="<?php echo $placehorder;?>"></textarea>
            </p>
            

        </fieldset>
        <input type="submit" name="enviar" value="Aceptar"/>
        <input type="reset" name="cancelar" value="Cancelar"/>
    </form>
</body>
</html>