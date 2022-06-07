<?php

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase

{

    /** @test */
  public function checkIfDataPresent()
  {
    $collect = new \App\Models\Support\Collection([11]);

var_dump($collect);

    $this -> assertEmpty($collect->getData());
  }

}



?>