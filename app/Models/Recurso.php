<?php
namespace Models;

require_once("autoload.php");

use DataBase\Conexion;

abstract class Recurso extends Conexion{

    public $descripcion; 

    abstract function setDescripcion(string $descripcion);
    abstract function recursosInfo(string $param):array;
}

?>