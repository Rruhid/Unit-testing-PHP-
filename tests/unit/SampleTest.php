<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase

{

    public function testTrueReturnstrue()
    
    {
        $output = false;
        if(1===1){
            $output = true;
        }


        $this->assertTrue($output);
    }




/** @test */
      public function checkIfHasKey(): void//empty
     {   
        $userArray = [

            'name' => 'Ruhid',
            'age'=>29,

        ];


        $this->assertArrayHasKey('age',$userArray );
     }






}



?>