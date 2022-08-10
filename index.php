<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .resaltar{
            color: red;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <?php
    $nombre = "Juan";

        echo "nombre $nombre";
        echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
        //echo '<p class="resaltar">Esto es un ejemplo de frase</p>'
        // echo "<p class=\'resaltar\'>Esto es un ejemplo de frase</p>" // escapar string

        //Comparación de string 

        $variable1="casa";
        $variable2="CASA";
        $resultado=strcmp($variable1, $variable2); // devuelve 1 si no son iguales y 0 sin iguales.
        //strcmp($variable1, $variable2); compara teniendo en cuenta las mayuscalas y minusculas.
        //echo "El resultado es: $resultado";
        $resultado2=strcasecmp($variable1, $variable2); // devuelve 1 si no son iguales y 0 sin iguales.
        //strcasecmp($variable1, $variable2); compara sin tener en cuenta las mayuscalas y minusculas.
        //echo "<br>Con strcasecmp el resultado es: $resultado2";

        if($resultado === 0){
            echo "La variable #1 con el valor de $variable1 y la variable #2 con el valor de $variable2 ¡SON IGUALES<br>";
        }else {
            echo "La variable #1 con el valor de $variable1 y la variable #2 con el valor de $variable2 ¡NO SON IGUALES<br>";
        }

        if ($resultado2 === 0) {
            echo "La variable #1 con el valor de $variable1 y la variable #2 con el valor de $variable2 ¡SIGNIFICAN LO MISMO Y NO ESTAN ESCRITAS IGUAL.<br>";
        }else {
            echo "La variable #1 con el valor de $variable1 y la variable #2 con el valor de $variable2 ¡NO SON IGUALES";
        }


    ?>
</body>
</html>