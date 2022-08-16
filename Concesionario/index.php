<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("concesionario.php");


    Compra_Vehiculo::descuento_Govierno();
    $compra_Antonio = new Compra_Vehiculo();
     $compra_Antonio->tapiceria_Cuero("rojo");
     $compra_Antonio->navegador_Gps();
     $compra_Antonio->climatizador();
    echo "Su precio final a pagar con el descuento de la ayuda del Govierno es: " . $compra_Antonio->precio_Final();





    ?>
</body>

</html>