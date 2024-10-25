<?php
namespace Controllers;

require_once("autoload.php");

use Models\Examen;

class ExamenController {

    public function search(string $param)
    {
        $objExamen = new Examen();
        $data = $objExamen->recursosInfo($param, "examenes");
        return $data;
    }   
}

?>