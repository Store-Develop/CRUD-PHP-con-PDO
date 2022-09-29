<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Usuarios.</title>
</head>
<body>
    
    <?php
    try {
    $usuario =htmlentities(addslashes($_POST["login"])) ;
    $contra=htmlentities(addslashes($_POST["password"]));
   
        $conexion =new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
        $contador=0;
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM usuarios WHERE usuario=:login";
        $resultado=$conexion->prepare($sql);

        $resultado->execute(array(":login"=>$usuario));

        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

            /*print_r("<pre>");
            print_r($registro);
            print_r("<pre>");*/
            //echo "Usuario: ". $registro["usuario"] . " contraseña: " . $registro["password"] . "<br>";

            if (password_verify($contra, $registro["password"])) {
                
                $contador++;

            }
        }
        if ($contador >0) {
            echo "Usuario Registrado";
        }else {
            echo "Usuario y o Contraseña incorrecta.";
        }
        
        $resultado->closeCursor();
    } catch (Exception $e) {
        
        echo "Linea de Error: " . $e->getMessage();
    }

    ?>

</body>
</html>