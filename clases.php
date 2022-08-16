<?php
 class Coche{
    //Atributos de una clase u objeto.
    protected $ruedas = 4;
    private $color = "";
    protected $motor = 1600;

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

function get_Ruedas(){
    return $this->ruedas;
}

function get_Color(){
    return $this->color;
}

function set_Color($color_Coche, $nombre_coche){

    $this->color=$color_Coche;

    echo "El " . $nombre_coche ." es de color: " . $color_Coche . "<br>";
}

function get_Motor(){

    return $this->motor;
}

function set_Motor($motor){

    $this->motor=$motor;

}


}


//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------


class Camion extends Coche{
    protected $ruedas = 8;
    private $color = "";
    protected $motor = 2600;

    function Camion($ruedas, $color, $motor){// Método constructor de la clase

        $this->ruedas=8;
        $this->color=$color;
        $this->motor= $motor;

    }

    function set_Color($color_Camion, $nombre_Camion){

        $this->color=$color_Camion;
    
        echo "El " . $nombre_Camion ." es de color: " . $color_Camion . "<br>";
    }

    function arranca()
    {
        parent::arranca();

        echo "Camion arrancado";
    }

    function get_Ruedas(){
        return $this->ruedas;
    }
    
    

    

}

?>