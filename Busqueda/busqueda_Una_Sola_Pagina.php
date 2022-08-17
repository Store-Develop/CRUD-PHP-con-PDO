<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    function ejecuta_Consulta($labusqueda){
    
    require("datos_C.php");

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
    $consulta="SELECT * FROM PERSONAL WHERE Departamento LIKE '%$labusqueda%'";

    $rst=mysqli_query($conexion, $consulta);
    // recorremos y almacenamos en un array la info obtenida.

    while ($datos=mysqli_fetch_array($rst, MYSQLI_ASSOC)) {
    echo "<table class='tabla'><tr><td>";
        echo "ID: " . $datos["Matrícula"] . "</td><td>";
        echo "Nombre: " . $datos["Nombre"] . "</td><td>";
        echo "Apellido: " . $datos["Apellido"] . "</td><td>";
        echo "Categoría: " . $datos["Categoría"] . "</td><td>";
        echo "Departamento: " . $datos["Departamento"] . "</td><td>";
        echo "Salario: " . $datos["Salario"] . "</td><td>";
        echo "Fecha ingreso: " . $datos["Fecha ingreso"] . "</td><td></tr></table>";
        echo "<br>";
      

}

mysqli_close($conexion);

}
?>
</head>
<body>
    <?php

    $mibusqueda=$_GET["buscar"];

    $mipage=$_SERVER["PHP_SELF"];

    if ($mibusqueda !=NULL) {
        ejecuta_Consulta($mibusqueda);
    }else {
        echo("<form action='" . $mipage . "' method='get'> 
        <label>Buscar: <input type='text' name='buscar'/></label>
        <input type='submit' name='enviando' value='ENVIAR'/>
        </form>");
    }


    ?>
</body>
</html>