<?php
 class Coche{
    //Atributos de una clase u objeto.
    public $ruedas = 4;
    public $color = "";
    public $motor = 2600;

    function Camion($ruedas, $color, $motor){// Método constructor de la clase

        $this->ruedas = $ruedas;
        $this->color=$color;
        $this->motor= $motor;

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

function establecer_Color($color_Coche, $nombre_coche){

    $this->color=$color_Coche;

    echo "El " . $nombre_coche ." es de color: " . $color_Coche . "<br>";
}

}


//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------


class Camion{
    //Atributos de una clase u objeto.
    public $ruedas = 8;
    public $color = "";
    public $motor = 2600;

    function Camion($ruedas, $color, $motor){// Método constructor de la clase

        $this->ruedas = $ruedas;
        $this->color=$color;
        $this->motor= $motor;

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

?>