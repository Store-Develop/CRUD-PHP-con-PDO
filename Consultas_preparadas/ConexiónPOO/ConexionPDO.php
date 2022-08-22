<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión con PDO.</title>
</head>
<body>
    
    <?php

    try {
        $conexion=new PDO('mysql:host=localhost; dbname=pruebas1;','root','');
        echo "¡Conexión OK!.";

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());



    }finally{

        $conexion=null;
    }
        



    ?>

</body>
</html> 