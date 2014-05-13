<?php
require_once('phpApp.php');
class PhpAppTest extends PHPUnit_Framework_TestCase{
  
  public function testFindData(){
      $phpApp = new PhpApp();
      $result = findData(); // Returns data in column
      $this->assertEquals('Tom B. Erichsen', $result);
  }
}
?>