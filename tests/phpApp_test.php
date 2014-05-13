<?php
require_once('phpApp.php');
class PhpAppTest extends PHPUnit_Framework_TestCase{
  
  public function testFindData(){
      $phpApp = new PhpApp();
      $dbLink = connectToDb(); // Connects to DB, creating new one if needed
      setData($dbLink); // Creates table, sets columns & data
      $result = findData($dbLink); // Returns data in column
      $this->assertEquals('Tom B. Erichsen', $result);
  }
}
?>
