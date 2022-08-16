<?php

class Compra_Vehiculo
{

    private $precio_Base;
    static $ayuda = 4500;

    function Compra_Vehiculo($gama)
    {
        if ($gama == "urbano") {
            $this->precio_Base = 10000;
            echo "Tipo Urbano ok!";
        } else if ($gama == "compacto") {
            $this->precio_Base = 20000;
            echo "Tipo Urbano ok!";
        } else if ($gama == "berlina") {
            $this->precio_Base = 30000;
            echo "Tipo Urbano ok!";
        }
    }


    /*function get_Gama_Vehiculo(){
        return $this->gama;
    }

    function set_Gama_Vehiculo($gama){

            $this->gama = $gama;

    }*/

    function climatizador()
    {
        $this->precio_Base += 2000;
    }

    function navegador_Gps()
    {
        $this->precio_Base += 2500;
    }

    function tapiceria_Cuero($color)
    {
        if ($color == "blanco") {
            $this->precio_Base += 3000;
        } else if ($color == "beige") {
            $this->precio_Base += 3500;
        } else {
            return $this->precio_Base += 5000;
        }
    }

    function precio_Final()
    {
        $valor_Final = $this->precio_Base-self::$ayuda;
        return $valor_Final;
    }
}
