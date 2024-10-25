<?php

function autoload($clase){
    $url = "app/".str_replace("\\","/",$clase.".php");
    require_once($url);
}
spl_autoload_register("autoload");

?>