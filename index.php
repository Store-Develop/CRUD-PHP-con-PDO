<?php

//Condicionales switch case.

if (isset($_POST["enviado"])) {
    $n_usuario = $_POST["n_usuario"];
    $contraseña = $_POST["contra"];
    $perfil = $_POST["perfil"];


    switch ($perfil) {
        case 'SAD' && $n_usuario == "Juan" && $contraseña == "J1c2":
                echo "¡¡¡Bienvenido(a) Super Administrador del sistema!";
            break;
        case 'AD' && $n_usuario == "Sebastian" && $contraseña == "Aux1":
            
                echo "¡¡¡Bienvenido(a) Administrador del sistema!";
            break;
        case 'EN' && $n_usuario == "Alejandra" && $contraseña == "AprI":

                echo "¡¡¡Bienvenido(a) Encargado del sistema!.";
            break;
        case 'E' && $n_usuario == "Mari" && $contraseña == "Sst1":
       
                echo "¡Bienvenido(a) Empleado de la compañia!";          
            break;
        case 'V' && $n_usuario == "VstEmp" && $contraseña == "Visitante#":

                echo "¡Bienvenido(a) ha nuestro sistema sacale provecho!"; 
            break;
        default:
        echo "Nombre de usuario o Contraseña incorrectos por favor validar.";
    }
}
