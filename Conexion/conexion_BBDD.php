<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //conexion por procedimiento.
    $db_host="localhost";
    $db_nombre="TU_BASE DE DATOS";
    $db_usuario="TU_USUARIO";
    $db_contraseña="TU_CONTRASEÑA";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
    //consulta a base de datos.
    $consulta="SELECT * FROM DATOSPERSONALES";

    $rst=mysqli_query($conexion, $consulta);
    // recorremos y almacenamos en un array la info obtenida.
    $datos=mysqli_fetch_row($rst);

    echo "ID: " . $datos[0] . ".<br>";
    echo "Nombre: " . $datos[1] . ".<br>";
    echo "Apellido: " . $datos[2] . ".<br>";
    echo "Edad: " . $datos[3] . ".<br>";


?>
</body>
</html>