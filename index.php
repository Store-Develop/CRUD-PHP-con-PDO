<?php

//Funciones en PHP. 

//Funciones con paso de parametros por valor y paso por referencia para paso por valor se pasa la variable normal
//Ejemplo: function incrementa($valor1){} y por referencia se le agrega el (&) Ejemplo: function incrementa(&$valor1){}.

function incrementa(&$valor1){

    $valor1 +=2;

        return $valor1;
}

$numero=5;

    echo incrementa($numero) . "<br>";

    echo $numero . "<br>" . "<br>";


function cambia_Mayus(&$param){

    $param = strtolower($param);

    $param= ucwords($param);

    return $param;

}

$cadena = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum labore facilis neque, odit quia alias accusantium harum, accusamus corporis error autem odio minus. Ratione veniam velit possimus distinctio sapiente? Deleniti?";

echo cambia_Mayus($cadena) . "<br>" . "<br>";

echo $cadena;



?>
