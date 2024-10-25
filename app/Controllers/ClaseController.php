<?php
namespace Controllers;

require_once("autoload.php");

use Models\Clase;

class ClaseController extends Clase{

    public function search(string $param)
    {
        $objExamen = new Clase();
        $data = $objExamen->recursosInfo($param);
        return $data;
    }   

}
?>