<?php
namespace App\Operation ;

class Operation 
{
    
    private $result;
    
    public function getResult()
    {
       return $this->result;

    }

    public function addition($a,$b)
    {
        return $this->result = $a + $b;
    }

    public function substraction($a,$b)
    {
        return $this->result = $a - $b;
    }

    public function multiplication($a,$b)
    {
        return $this->result = $a * $b;
    }

    public function division($a,$b)
    {
        return $this->result = $a / $b;
    }

}
