<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Actualizar</title>
</head>
<body>
<?php

$matricula = $_GET["Codigo"];
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
$consulta="UPDATE Personal  SET Matrícula=$matricula, Apellido='$apellido', Nombre='$nombre', Cargo='$cargo', Departamento='$departamento', Salario=$salario) WHERE Matrícula=$matricula";

$rst=mysqli_query($conexion, $consulta);

if ($rst==false) {
   echo "Ha ocurrido un error por favor validar.";
}else {
   echo "¡Actualización exitosa! <br><br>";
   echo "<table><tr><td>$matricula</td></tr>";
   echo "<tr><td>$apellido</td></tr>";
   echo "<tr><td>$nombre</td></tr>";
   echo "<tr><td>$cargo</td></tr>";
   echo "<tr><td>$departamento</td></tr>";
   echo "<tr><td>$salario</td></tr></table>";
   
}

?>
</body>
</html>