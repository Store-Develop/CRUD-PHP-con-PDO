<?php

//Operador ternario ?.

    if(isset($_POST["enviado"])){
        $n_usuario = $_POST["n_usuario"];
        $contraseña = $_POST["contra"];

        /*if ($edad < 18) {
            echo "Eres Menos de edad. No tienes acceso";
        }else {
            echo "Eres mayor de edad. Puedes acceder";
        }*/

        $acceso = $n_usuario=="Juan" && $contraseña == "1234" ? "¡¡¡Bienvenido!!!" : "Nombre de usuario o Contraseña incorrectos Por favor validar";

        echo $acceso;

    }





?>