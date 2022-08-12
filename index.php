<?php

//Condicionales uso IF

    if(isset($_POST["enviado"])){
        $edad = $_POST["edad_usuario"];

        if ($edad <= 17) {
            echo "Eres Menos de edad";
        }elseif ($edad >= 18 && $edad <=39 ) {
            echo "Eres Joven";
        }elseif ($edad >= 40 && $edad <=64 ) {
            echo "Eres Maduro";
        }else {
            echo "¿qué espera que no has ido a cobrar el pago de la tercera edad? y ¡Cu&iacutedate!";
        }
    }





?>