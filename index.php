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
        function incrementaVariable(){
            static $contador = 0;// variable estatica, se ejecuta solo la primera vez que se llama la función y el valor se conserva al finalizar la función.

            $contador += 1;

            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        
    ?>
</body>
</html>