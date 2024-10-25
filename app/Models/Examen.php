<?php
namespace Models;

require_once('autoload.php');

use Models\Recurso;

class Examen extends Recurso{
    public $tipo;
    private $tabla = "examenes";

    public function setTipo(string $tipo){
        $this->tipo = $tipo;
    }

    public function recursosInfo(string $param):array{
         return $this->consulta($this->tabla, $param);
    }
    
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
}

?>