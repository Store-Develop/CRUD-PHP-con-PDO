<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessiones y Cookies </title>
</head>
<body>

<?php
// Creación de Cookies por medio de setcookie(nombreCookie, Valor, tiempoDuración, ruta donde actua,)
    setcookie("prueba", "Esta es la información de nuestra primera cookie",time()+300,"localhost/PHP_PildoresI/Cookies/zona_contenido");

?>
    
</body>
</html>