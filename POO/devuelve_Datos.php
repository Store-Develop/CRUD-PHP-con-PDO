<?php

    require('conexion.php');

class DevuelveDatos extends Conexion{
    protected $conexion;
    
    public function __construct()
    {      
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
        
    }

    public function getDatos(){

        $sql = "SELECT * FROM personal";
        $execute = $this->conexion->query($sql);
        $datos=$execute->fetchAll(PDO::FETCH_ASSOC);
        return $datos;

    }

}
