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

        $InsertarC = $_POST["C_emp"];
        $InsertarA=$_POST["A_emp"];
        $InsertarN=$_POST["N_emp"];
        $InsertarCA=$_POST["CA_emp"];
        $InsertarD=$_POST["D_emp"];
        $InsertarS=$_POST["S_emp"];

        try {
            $conexion= new PDO('mysql:host=localhost; dbname=pruebas1', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

            $sql="INSERT INTO personal (Matrícula, Apellido, Nombre, Cargo, Departamento, Salario) VALUES (:C_emp, :A_emp, :N_emp, :CA_emp, :D_emp, :S_emp)";
            $pst=$conexion->prepare($sql);
            $pst->execute(array("C_emp"=>$InsertarC, "A_emp"=>$InsertarA, "N_emp"=>$InsertarN, "CA_emp"=>$InsertarCA, "D_emp"=>$InsertarD, "S_emp"=>$InsertarS));

            echo "¡Registro Exitoso!";
            
            $pst->closeCursor();

} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}finally{

    $conexion=null; 
}
        
    ?>

</body>
</html>