<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="./css/Style.css" type="text/css" />-->
    <title>Insertando Registros.</title>
</head>
<body>
<?php

    
    require("datos_C.php");

    $codigoP = $_GET["C_emp"];
    $apellidoP =$_GET["A_emp"];
    $nombreP = $_GET["N_emp"];
    $cargoP = $_GET["Cargo_emp"];
    $departamentoP =$_GET["D_emp"];
    $salarioP = $_GET["S_emp"];



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

    //consulta preparada a base de datos.
    $sql="INSERT INTO PERSONAL (Matrícula, Apellido, Nombre, Cargo, Departamento, Salario) VALUES (?, ?, ?, ?, ?, ?)";
    $rst=mysqli_prepare($conexion, $sql);
    $ok=mysqli_stmt_bind_param($rst, "issssi",$codigoP, $apellidoP, $nombreP, $cargoP, $departamentoP, $salarioP);
    $ok=mysqli_stmt_execute($rst);
    if ($ok==false) {
        echo "Error al Insertar la Persona.";
    }else {
        

        //$ok=mysqli_stmt_bind_result($rst, $codigo, $apellido, $nombre, $cargo, $departamento, $salario);

        echo "Persona Agregada con Exito: <br><br>";

        /*while (mysqli_stmt_fetch($rst)) {
            
            echo "Codigo: " . $codigo . " " . "Apellido: " . $apellido . " " . "Nombre: " . $nombre . " " . "cargo: " . $cargo . " " . "Departamento: " . $departamento . " " . "Salario: " . $salario . "<br>";

        }*/

        mysqli_stmt_close($rst);
    }

?>
</body>
</html>