<?php
namespace Models;

require_once('autoload.php');

use Models\Recurso;

class Clase extends Recurso{

    public $ponderacion;
    public $intMaxPonderacion = 5;
    private $tabla = 'clases';

    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setPonderacion($ponderacion){
        $this->ponderacion = $ponderacion;
    }

    public function recursosInfo(string $param):array
    {
        return $this->consulta($this->tabla, $param); 
    }
}

?>