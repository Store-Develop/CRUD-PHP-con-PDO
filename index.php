<?php
// Número aleatorio funcion matemática rand()
$num1 = rand(10, 50);

echo "El numro es: " . $num1 . "<br>";

// potencia de un numero función pow()
$num2=pow(5,3);
echo "El numro es: " . $num2 . "<br>";

//redonder un valor numerico función round()
$num3=5.7556454;
echo "El numero es: " . round($num3, 2) . "<br>";

// PHP es de casting implicito es decir que no es necesario declarar el tipo de dato de la variable.

$num4 = "5";// PHP asume que es una variable de tipo string.
$num4 = 2;// PHP asume que ahora $num4 es una variable de tipo.
$num4 = 5.75; // PHP ahora asume que es una variable de tipo float.
// esto se hace de manera implicita osea sin que te des cuenta, (automatico).
// Tambien se puede realizar casting explicito osea indicar el tipo de dato que quieres
//para esto debes colocar la dentro de parentesis el tipo de dato que quieres ejemplo:
$resultado = (int)$num4;



?>