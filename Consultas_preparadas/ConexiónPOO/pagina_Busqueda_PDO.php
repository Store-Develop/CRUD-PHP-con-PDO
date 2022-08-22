<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $busqueda=$_POST["buscar"];

        try {
            $conexion= new PDO('mysql:host=localhost; dbname=pruebas1', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

            $sql="SELECT * FROM personal WHERE Matrícula=?";
            $pst=$conexion->prepare($sql);
            $pst->execute(array($busqueda));

            while ($datos=$pst->fetch(PDO::FETCH_ASSOC)) {
            
                    echo "<table class='tabla'><tr><td>";
                    echo "ID: " . $datos["Matrícula"] . "</td><td>";
                    echo "Nombre: " . $datos["Nombre"] . "</td><td>";
                    echo "Apellido: " . $datos["Apellido"] . "</td><td>";
                    echo "Cargo: " . $datos["Cargo"] . "</td><td>";
                    echo "Departamento: " . $datos["Departamento"] . "</td><td>";
                    echo "Salario: " . $datos["Salario"] . "</td><td></tr></table>";
                    echo "<br>";
            }

            $pst->closeCursor();

} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}finally{

    $conexion=null;
}
        
    ?>

</body>
</html>