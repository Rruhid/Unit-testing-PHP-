<?php

namespace App\Models;

class Employee

{
    protected $employee;
    protected $employeeAge;

    //Function set employee name 

    public function setName($name)
    {
        $this->employee = $name;
    }

    //Function GET employee name 

    public function getName() 
    {
        return $this->employee;
    }


//Function set  employee age 
    public function setAge($age)
    {
        $this->employeeAge = $age;
    }

    //Function GET employee age 

    public function getAge() 
    {
        return $this->employeeAge;
    }




    // age and name

    public function setNameAndAge($name, $age)
    {
        $this->employee = $name;
        $this->employeeAge = $age;
    }

    //Function GET employee age 

    public function getNameAndAge() 
    {
        return [$this->employee, $this->employeeAge];
    }

    
 
}


?>