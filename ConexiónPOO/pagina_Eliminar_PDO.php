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

        $busquedaC = $_POST["C_emp"];
       
        try {
            $conexion= new PDO('mysql:host=localhost; dbname=pruebas1', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

            $sql="DELETE FROM personal WHERE Matrícula = :C_emp";
            $pst=$conexion->prepare($sql);
            $pst->execute(array("C_emp"=>$busquedaC));

            echo "¡Registro eliminado con exito!";

            $pst->closeCursor();

} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}finally{

    $conexion=null; 
}
        
    ?>

</body>
</html>