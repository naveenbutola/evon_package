<?php
 
require_once __DIR__ . '/../vendor/autoload.php';

use Evon\Oauth\Nacho;
 
class NachoTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    $nacho = new Nacho;
    $this->assertTrue($nacho->hasCheese());
  }
 
}
