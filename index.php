<style>
    .resultado{
        color: red;
        font-weight: bold;
        font-size: 32px;

    }
</style>

<?php

if (isset($_POST["button"])) {

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    Calcular($operacion);
}

function Calcular($calculo){
    if (!strcmp("Suma", $calculo)) 
    {
        global $numero1;
        global $numero2;

        $resultado = ($numero1 + $numero2);
        echo "<p class='resultado'>El resultado es: $resultado </p>";
        
    } elseif (!strcmp("Resta", $calculo)) {
        global $numero1;
        global $numero2;

        $resultado = ($numero1 - $numero2);
        echo "<p class='resultado'>El resultado es: $resultado </p>";
    } elseif (!strcmp("Multiplicación", $calculo)) {
        global $numero1;
        global $numero2;

        $resultado = ($numero1 * $numero2);
        echo "<p class='resultado'>El resultado es: $resultado </p>";
    } elseif (!strcmp("Division", $calculo)) {
        global $numero1;
        global $numero2;

        $resultado = ($numero1 / $numero2);
        echo "<p class='resultado'>El resultado es: $resultado </p>";
    } elseif (!strcmp("Modulo", $calculo)) {
        global $numero1;
        global $numero2;

        $resultado = ($numero1 % $numero2);
        echo "<p class='resultado'>El resultado es: $resultado </p>";
    }

}
