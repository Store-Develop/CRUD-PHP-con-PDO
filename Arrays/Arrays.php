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
    /*$semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miércoles";
    $semana[]="Jueves";*/

    //Agregar un elemento a un Array indexado.
    //$semana[]="Viernes";

    //Ordenar los datos de un array con la función predeterminada sort();
    //sort($semana);

    //Recorrer un Array indexado con for.
    /*for ($i=0; $i< count($semana); $i++) { 

        echo $semana[$i] . "<br>";
    }*/

   //Forma 2 para declarar un array.
    /*$semana=array("Lunes", "Martes", "Miércoles", "Jueves");
    echo $semana[3] . "<br>";*/

//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

    //ARREYS ASOCIATIVOS.

    //$datos=array("Nombre"=>"Juan", "Apellido"=>"Pérez", "Edad"=>24);
    //$datos="Martín";
    //echo $datos["Nombre"] . "<br>"; 

    //Función pre definida is_array para validar si un nombre es un Array o una Variable.

    /*if (is_array($datos)) {
        
        echo "Es un Array.";
    }
    else{
        echo "No es un Array.";
    }*/

    //Agregar un elemento mas a un array asociativo.

    //$datos["Pais"] = "Colombia";

    //Forma de recorrer un array asociativo.
    /*foreach ($datos as $clave => $valor) {
        
        echo "A $clave le corresponde $valor <br>";

    }*/

    //------------------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------------------

    //ARRAYS MULTIDIMENCIONALES.

    $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                    "citrico" => "mandarina",
                                    "otros" => "manzana"), 

                     "leche" =>array("animal" =>"vaca",
                                     "vegetal" => "coco"),

                     "carne" =>array("vacuno"=>"lomo",
                                     "porcino" => "pata"));

        //echo $alimentos["carne"] ["vacuno"];

         echo print_r($alimentos);
?>
</body>
</html>