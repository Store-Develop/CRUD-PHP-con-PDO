<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprueba login</title>
</head>
<body>
    
    <?php

    try {
        
        $conexion =new PDO("sqlsrv:server=PFLAPTOP0084\SQLEXPRESS;database=pruebasL", NULL, NULL, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND                                                                                       => "SET NAMES utf8"    ));

        $sql="SELECT * FROM dbo.Usuarios WHERE usuario = :usuario AND password = :pass";

        $rst=$conexion->prepare($sql);

        $usuario=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));

        $rst->bindValue(":usuario", $usuario);
        $rst->bindValue(":pass", $password);

        $rst->execute();

        $p_Exito= $rst->rowCount();

        if ($p_Exito !=0) {

            session_start();

            $_SESSION["usuario"]= $_POST["login"];
                        
            header("location:usuarios_Registrados_Uno.php");

        }else {

            header("location:login.php");
        }

    } catch (Exception $e) {
        die ("Error: " . $e->getMessage());
    }

    ?>

</body>
</html>