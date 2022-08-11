<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <title>Document</title>
    
</head>
<body>
    <form nema="form1" method="POST" action="">
        <p>
        <label for="num1"></label>
        <input type="number" name="num1" id="num1"/>
        <label for="num2"></label>
        <input type="number" name="num2" id="num2"/>
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>Division</option>
            <option>Modulo</option>
        </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onclick="prueba"/>
        </p>
    </form>
    <p>&nbsp;</p>

    <?php

        if (isset($_POST["button"])) {
            
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];

            if (!strcmp("Suma", $operacion)) {
                
                echo "El resultado es: " . ($numero1 + $numero2);
            }
            elseif(!strcmp("Resta", $operacion))
            {
                echo "El resultado es: " . ($numero1 - $numero2);
            }
            elseif(!strcmp("Multiplicación", $operacion))
            {
                echo "El resultado es: " . ($numero1 * $numero2);
            }
            elseif(!strcmp("Division", $operacion))
            {
                echo "El resultado es: " . ($numero1 / $numero2);
            }
            elseif(!strcmp("Modulo", $operacion))
            {
                echo "El resultado es: " . ($numero1 % $numero2);
            }
        }
