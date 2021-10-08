<?php

    $usuario = $_GET["usuario"];
    $contrasenya = $_GET["contrasenya"];


    $usuario = strip_tags($usuario);

    echo $usuario;

    $usuario = stripslashes($usuario);

    echo $usuario;

    $usuario = htmlspecialchars($usuario);

    echo $usuario;

    if (empty($usuario)){

        echo "el usuario debe estar relleno <br>";
    }
    if (empty($contrasenya)){

        echo "la contraseña debe estar rellena<br>";


    }

    if(preg_match ("(?=\w*\[0-9)(?=\w*[A-Z])\S{8,}$", $contrasenya )){

        echo "contraseña valida";
    }

    ?>