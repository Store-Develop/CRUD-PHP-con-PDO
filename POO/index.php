<?php

require ("devuelve_Datos.php");

$persona =$_POST["buscar"];
 $datos=new DevuelveDatos();

 $listaDatos = $datos->getDatos($persona);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando datos.</title>
</head>
<body>
    
    <?php

        foreach ($listaDatos as $datos) {
            
            echo "<table><tr><td>";
            echo "ID: " . $datos['Matrícula'] . "</td><td>";
            echo "Apellidos: " . $datos['Apellido'] . "</td><td>";
            echo "Nombre: " . $datos['Nombre'] . "</td><td>";
            echo "Cargo: " . $datos['Cargo'] . "</td><td>";
            echo "Departamento: " . $datos['Departamento'] . "</td><td>";
            echo "Sueldo: " . $datos['Salario'] . "</td><td></tr></table>";
            echo "<br>";
        }
    ?>

</body>
</html>