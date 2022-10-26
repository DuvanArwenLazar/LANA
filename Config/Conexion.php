<?php

class Conexion{
    public $stm;
    public function __construct(){
        try {
            $this->stm = new PDO('mysql:host=localhost;dbname=lana','root','');
        }
        catch (PDOException $err) {
            echo 'Error en: -> ' . $err->getMessage();
        }
    }
    
}

?>