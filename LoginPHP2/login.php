<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Login</title>
</head>

<body>

    <?php

    if (isset($_POST["enviar"])) {

        try {

            $conexion = new PDO("sqlsrv:server=PFLAPTOP0084\SQLEXPRESS;database=pruebasL", NULL, NULL, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND                                                                                       => "SET NAMES utf8"
            ));

            $sql = "SELECT * FROM dbo.Usuarios WHERE usuario = :usuario AND password = :pass";

            $rst = $conexion->prepare($sql);

            $usuario = htmlentities(addslashes($_POST["login"]));
            $password = htmlentities(addslashes($_POST["password"]));

            $rst->bindValue(":usuario", $usuario);
            $rst->bindValue(":pass", $password);

            $rst->execute();

            $p_Exito = $rst->rowCount();

            if ($p_Exito != 0) {

                session_start();

                $_SESSION["usuario"] = $_POST["login"];

                //header("location:usuarios_Registrados_Uno.php");
            } else {

                //header("location:login.php");
                echo "Error Usuario y o Contraseña Incorrectos por favor validar.";
            }
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
    ?>

    <?php

    if (!isset($_SESSION["usuario"])) {
        include("formulario.php");
    }else{
        echo "Usuario: " . $_SESSION["usuario"];
    }
    

    ?>
    <h2>CONTENIDO DE LA WEB</h2>
    <table width="800" border="0">
        <tr>
            <td><img src="./img/img.jpg" width="300" height="166"></td>
            <td><img src="./img/img1.jpg" width="300" height="171"></td>
        </tr>
        <tr>
            <td><img src="./img/img2.jpg" width="300" height="166"></td>
            <td><img src="./img/img3.png" width="300" height="197"></td>
        </tr>
    </table>


</body>

</html>