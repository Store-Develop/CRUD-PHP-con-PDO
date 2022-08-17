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
    $db_nombre="TU_BBDD";
    $db_usuario="TU_USUSARIO";
    $db_contraseña="TU_CONTRASEÑA";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña);

    //Si no podemos realizar la conexion con la base de datos por algun motivo capturamos el error y le decimos que haga algo.
    /*if (mysqli_connect_errno()) {
       echo "Conexión con BBDD fallida por favor verificar.";

       exit();
    }*/

    // podemos especificar la DB aparte de la linea de conexión si no conecta enviamos un mensaje de error.
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
    //cotejamiento para que acepte caracteres especiales.
    mysqli_set_charset($conexion, "utf8");

    //consulta a base de datos.
    $consulta="SELECT * FROM DATOSPERSONALES";

    $rst=mysqli_query($conexion, $consulta);
    // recorremos y almacenamos en un array la info obtenida.

    while ($datos=mysqli_fetch_row($rst)) {
    
        echo "ID: " . $datos[0] . " ";
        echo "Nombre: " . $datos[1] . " ";
        echo "Apellido: " . $datos[2] . " ";
        echo "Edad: " . $datos[3] . " ";
        echo "<br>";

}
//cerramos la conexion.
mysqli_close($conexion);


?>
</body>
</html>