<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="./css/estilos.css">
    <title>Document</title>
    
</head>
<body>
    <h1>Usando Operadores de compararción</h1>
    <form action="" method="POST" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="center">
            <tr>
                <td>Nombre:</td>
                <td>
                    <label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </td>
                
            </tr>
            <tr>
            <td>Edad:</td>
            <td>
                    <label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario">
            </td>

            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2"  align="center"><input type="submit" name="enviado" id="enviado" value="Enviar"></td>
            </tr>
        </table>
    </form>

<?php

    if (isset($_POST["enviado"])) {
        $usuario = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];

        if ($usuario =="Juan" && $edad >= 18) 
        {
            echo " <p class='validado'>Puedes entrar</p>";
        }
        else
        {
            echo "<p class='no_validado'>No puedes entrar</p>";
        }
    }

?>


</body>
</html>
