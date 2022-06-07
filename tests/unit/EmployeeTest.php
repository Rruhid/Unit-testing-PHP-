<?php

use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase

{
    protected $employee;

//calling setUp function in order to avoid instantiating    $employee = new \App\Models\Employee;   each time 
    public function setUp() :void 
    {
        $this->employee = new \App\Models\Employee;
    }



    public function testGetEmployeeName():  void

    {
        $this->employee -> setName('Ruhid');

        $this -> assertEquals($this->employee -> getName(), 'Ruhid');
    }




    public function testGetEmployeeAge(): void 
    {
        //$age=29;
      
       $this->employee->setAge(29);
        $this->assertEquals($this->employee->getAge(), 29);


    }




    public function testGetEmployeeNameAndAge() : void 
{

    
    $this->employee->setNameAndAge('Ruhid', 29);
    $this->assertEquals ($this->employee->getNameAndAge(), ['Ruhid', 29]);

    $this->assertArrayHasKey( 1, $this->employee->getNameAndAge() );


}


 
}

//assertions and collections



?>