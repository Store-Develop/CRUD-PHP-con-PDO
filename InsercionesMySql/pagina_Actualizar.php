<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="./css/Style.css" type="text/css" />-->
    <title>Document</title>
</head>
<body>
<?php

    
    require("datos_C.php");

    $labusqueda = $_GET["buscar"];


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
    $consulta="SELECT * FROM PERSONAL WHERE Matrícula LIKE '%$labusqueda%'";

    $rst=mysqli_query($conexion, $consulta);
    // recorremos y almacenamos en un array la info obtenida.

    while ($datos=mysqli_fetch_array($rst, MYSQLI_ASSOC)) {
    //echo "<table class='tabla'><tr><td>";

        echo "<form action='actualizar.php' method='get'>";
        echo "<input type='number' name='Codigo' value='" . $datos['Matrícula'] . "'><br>";
        echo "<input type='text' name='N_emp' value='" . $datos['Nombre'] . "'><br>";
        echo "<input type='text' name='A_emp' value='" . $datos['Apellido'] . "'><br>";
        echo "<input type='text' name='Cargo_emp' value='" . $datos['Cargo'] . "'><br>";
        echo "<input type='text' name='D_emp' value='" . $datos['Departamento'] . "'><br>";
        echo "<input type='number' name='S_emp' value='" . $datos['Salario'] . "'><br>";
        echo "<input type='submit' name='enviando' value='ACTUALIZAR!'>";
        echo "</form>";
        
      

}

mysqli_close($conexion);


?>
</body>
</html>