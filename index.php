<?php
// POO creación asignación de atributos de Clases en PHP.


 class Coche{
        //Atributos de una clase u objeto.
        var $ruedas;
        var $color;
        var $motor;

        function Coche(){// Método constructor de la clase

            $this->ruedas=4;
            $this->color="";
            $this->motor= 1600;

        }

    function arranca(){ // Métodos o funcionalidades de una clase u objeto.

        echo "Estoy arrancando <br>";

    }

    function girar(){

        echo "Estoy girando <br>";

    }

    function frenar(){

        echo "Estoy frenando <br>";

    }

 }

 $renault = new Coche();
 $mazda = new Coche();
 $volvo = new Coche();

 $mazda->girar();
 $mazda->frenar();
 echo $mazda->ruedas;



?>