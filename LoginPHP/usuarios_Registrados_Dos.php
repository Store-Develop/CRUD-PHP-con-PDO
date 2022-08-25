<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Página de Ususarios Registrados </title>
</head>

<body>

    <?php

    session_start();

    if (!isset($_SESSION["usuario"])) {


        header("location:login.php");
    }

    ?>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="usuarios_Registrados_Uno.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="usuarios_Registrados_Dos.php">PÁGINA2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usuarios_Registrados_Tres.php">PÁGINA3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usuarios_Registrados_Cuatro.php">PÁGINA4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cerrar_Sesion.php">Cerrar sesión</a>
        </li>
    </ul>
    <h1>Bienvenidos Usuarios</h1>

    <?php

    echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";

    ?>

    <p>Esto es información solo para usuarios registrados.</p>

</body>

</html>