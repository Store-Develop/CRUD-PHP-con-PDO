<?php
 class Coche{
    //Atributos de una clase u objeto.
    private $ruedas;
    public $color = "";
    public $motor = 1600;

    function Camion($color, $motor){// Método constructor de la clase

        $this->ruedas = 4;
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


class Camion extends Coche{
    private $ruedas;
    public $color = "";
    public $motor = 1600;

    function Camion($color, $motor){// Método constructor de la clase

        $this->ruedas=8;
        $this->color=$color;
        $this->motor= $motor;

    }

    function establecer_Color($color_Camion, $nombre_Camion){

        $this->color=$color_Camion;
    
        echo "El " . $nombre_Camion ." es de color: " . $color_Camion . "<br>";
    }

    function arranca()
    {
        parent::arranca();

        echo "Camion arrancado";
    }

    

}

?>