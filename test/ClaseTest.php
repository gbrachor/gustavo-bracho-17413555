<?php 

require_once('vendor/autoload.php');
require_once('autoload.php');

use Controllers\ClaseController;
use PHPUnit\Framework\TestCase;

class ClaseTest extends TestCase{

    private $c;

    public function setUp():void{
        $this->c = new ClaseController();
    }

    public function testClase(){
        $this->assertIsArray($this->c->search('ingles'));
    }
}

?>