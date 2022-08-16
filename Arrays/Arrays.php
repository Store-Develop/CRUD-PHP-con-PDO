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

    //ARREYS INDEXADOS.
//Forma 1 para declarar un array.
    /*$semana[0]="Lunes";
    $semana[1]="Martes";
    $semana[2]="Miércoles";

    echo $semana[0];*/

   //Forma 2 para declarar un array.
    $semana=array("Lunes", "Martes", "Miércoles", "Jueves");
    echo $semana[3] . "<br>";

    //ARREYS ASOCIATIVOS.

    $datos=array("Nombre"=>"Juan", "Apellido"=>"Pérez", "Edad"=>24);

    echo $datos["Nombre"] . "<br>";

?>
</body>
</html>