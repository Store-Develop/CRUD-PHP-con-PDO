<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a MySql con POO</title>
</head>
<body>
    
    <?php
        $conexion = new mysqli("localhost", "root", "", "pruebas1");

        if ($conexion->connect_errno) {
            
            echo "Falló la conexión" . $conexion->connect_errno;

        }
        //mysqli_set_charset($conexion,"utf8");//Forma procedimental.
        $conexion->set_charset("utf8");// Forma orientada a objetos.

        $sql="SELECT * FROM personal";

        //Procedimental.
        //$resultados=mysqli_query($conexion, $sql);

        $resultados=$conexion->query($sql);

        if ($conexion->error) {
            
            die($conexion->error);
        }

        //procedimental.
        //while($datos=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){}

        while($datos=$resultados->fetch_assoc()){

            echo "<table class='tabla'><tr><td>";
            echo "ID: " . $datos["Matrícula"] . "</td><td>";
            echo "Nombre: " . $datos["Nombre"] . "</td><td>";
            echo "Apellido: " . $datos["Apellido"] . "</td><td>";
            echo "Cargo: " . $datos["Cargo"] . "</td><td>";
            echo "Departamento: " . $datos["Departamento"] . "</td><td>";
            echo "Salario: " . $datos["Salario"] . "</td><td></tr></table>";
            echo "<br>";

            echo "<br>";
            echo "<br>";
        }
        //procedimental.
        //mysqli_close($conexion);

        $conexion->close();






    ?>


</body>
</html>