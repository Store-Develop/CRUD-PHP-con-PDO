<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insertar</title>
</head>
<body>
<?php

$matricula = $_GET["C_emp"];
$apellido = $_GET["A_emp"];
$nombre = $_GET["N_emp"];
$cargo = $_GET["Cargo_emp"];
$departamento = $_GET["D_emp"];
$salario = $_GET["S_emp"];

require("datos_C.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña);

//Si no podemos realizar la conexion con la base de datos por algun motivo capturamos el error y le decimos que haga algo.
if (mysqli_connect_errno()) {
   echo "Conexión con BBDD fallida por favor verificar.";

   exit();
}

// podemos especificar la DB aparte de la linea de conexión si no conecta enviamos un mensaje de error.
mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
//cotejamiento para que acepte caracteres especiales.
mysqli_set_charset($conexion, "utf8");

//consulta a base de datos.
$consulta="DELETE FROM PERSONAL WHERE Matrícula=$matricula";

$rst=mysqli_query($conexion, $consulta);

if ($rst==false) {
   echo "Ha ocurrido un error por favor validar.";
}else {
   //echo "¡Registro Eliminado! <br><br>";
   //echo mysqli_affected_rows($conexion);
   if (mysqli_affected_rows($conexion)==0) {
    echo "no hay registros que eliminar con ese código";
   }else if(mysqli_affected_rows($conexion)==1){
    echo "se ha eliminado " . mysqli_affected_rows($conexion) . " registro.";
   }else{
    echo "se han eliminado " . mysqli_affected_rows($conexion) . " registros.";
   }
}

?>
</body>
</html>