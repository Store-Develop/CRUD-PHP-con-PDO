<?php

require('config.php');


class Conexion
{

    private $conect;

    public function __construct()
    {
        $conexion_db = "mysql:host=" . DB_HOST . "; dbname=" .  DB_NAME . ";charset=utf8";

        try {
            $this->conect = new PDO($conexion_db, DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->conect = "Error de conexión";
            echo "ERROR: " . $e->getLine();
        }
    }

    public function connect()
    {

        return $this->conect;
    }
}

?>
