<?php

include("clases.php");

$mazda= new Coche();

$pegaso=new Camion();

echo "El mazda tiene: " . $mazda->get_Ruedas() . " ruedas<br>";
echo "El mazda tiene: " . $pegaso->get_Ruedas() . " ruedas<br>";

echo "El mazda tiene un motor de " . $mazda->get_Motor() . " cc<br>";
echo "El pegaso tiene un motor de " . $pegaso->get_Motor() . " cc<br>";
?>