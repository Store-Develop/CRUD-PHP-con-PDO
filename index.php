<?php

//Funciones en PHP. 

//Funciones pre definidas ejemplo;

$cadena = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis eos asperiores unde nulla perferendis vel illo suscipit tempore. Iure nulla harum ullam atque eum voluptatibus, quisquam aperiam consectetur cum.";


    echo (strtolower($cadena)) . "<br>" . "<br>";// Convierte una cadena de texto, toda en minusculas.
    echo (strtoupper($cadena)) . "<br>" . "<br>";// Convierte una cadena de texto, toda en MAYUSCULAS.
    echo (ucwords($cadena)) . "<br>" . "<br>";// Convierte la primera letra de cada palabra en Mayuscula.

// Funciones propias;

function Suma($num1, $num2){

    $resultado = $num1+$num2;

    return $resultado;

}

echo Suma(4, 5) . "<br>" . "<br>";

function frase_Mayusculas($frase, $conversion=false){

    $frase = strtolower($frase);

    if ($conversion==true) {
        $resultado=ucwords($frase);


    }else {
        $resultado=strtoupper($frase);
    }

        return $resultado;

}

echo (frase_Mayusculas("Esto es una frase de prueba para ver como funcionan las funciones valga la redundancia en PHP ¡OK!"));

?>
