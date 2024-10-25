<?php 

require_once('vendor/autoload.php');
require_once('autoload.php');

use Controllers\ExamenController;
use PHPUnit\Framework\TestCase;

class ExamenTest extends TestCase{

    private $c;

    public function setUp():void{
        $this->c = new ExamenController();
    }

    public function testExamen(){
        $this->assertIsArray($this->c->search('ingles'));
    }
}

?>