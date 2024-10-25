<?php
require_once("autoload.php");

use Controllers\ExamenController;
use Controllers\ClaseController;

$param = readline('Buscar: ');

if (strlen($param) >= 3) {
    $objExamen = new ExamenController();
    $objClase = new ClaseController();

    foreach ($objExamen->search($param) as $key => $examen) {
       print('Examen: '.$examen->descripcion.' | '. $examen->tipo. PHP_EOL);
    }

    foreach ($objClase->search($param) as $key => $clase) {
        print('Clase: '.$clase->descripcion.' | '. $clase->ponderacion . '/'. $clase->intMaxPonderacion. PHP_EOL);
     }
}else{
    echo 'El parámetro de búsqueda debe tener al menos 3 caracteres.';
}
