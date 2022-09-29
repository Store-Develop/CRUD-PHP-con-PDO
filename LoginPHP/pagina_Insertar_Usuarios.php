<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar usuarios.</title>
</head>
<body>
    
    <?php

    $usuario = $_POST["usuario"];
    $contra=$_POST["password"];

    $pass_cifrado=password_hash($contra, PASSWORD_DEFAULT);

    try {
        $conexion =new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET utf8");
        $sql="INSERT INTO usuarios (usuario, password) VALUES(:user, :pass)";
        $resultado=$conexion->prepare($sql);

        $resultado->execute(array(":user"=>$usuario, ":pass"=>$pass_cifrado));

        echo "Registro Insertado";
        
        $resultado->closeCursor();
    } catch (Exception $e) {
        
        echo "Linea de Error: " . $e->getMessage();
    }

    ?>

</body>
</html>