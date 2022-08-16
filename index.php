<?php

include("clases.php");

$mazda= new Coche();

$pegaso=new Camion();

echo("El mazda tiene: " . $mazda->ruedas . " ruedas <br>"); 
echo("El pegaso tiene: " . $pegaso->ruedas . " ruedas <br>");

?>