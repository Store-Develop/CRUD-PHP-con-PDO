<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda con marcadores</title>
</head>
<body>
    
    <?php

        $busqueda_Nombre = $_POST["nombre"];
        $busqueda_Area=$_POST["area"];

        try {
            $conexion= new PDO('mysql:host=localhost; dbname=pruebas10', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

            $sql="SELECT * FROM personal WHERE Nombre = :N_emp AND Departamento =:A_emp";
            $pst=$conexion->prepare($sql);
            $pst->execute(array("N_emp"=>$busqueda_Nombre, "A_emp"=>$busqueda_Area));

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