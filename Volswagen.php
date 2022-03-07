<?php
include('InterfaceCar.php');

class Volswagen implements Car {

    private $tires = 4;
    protected $wheul = "left";
    protected $door = 2;
    public $color;

    public function getTires()
    {
        return $this->tires;
    }

    public function setTires($tires)
    {
        $this->tires = $tires;

        return $this;
    }

    public function getWheul()
    {
        return $this->wheul;
    }

    public function setWheul($wheul)
    {
        $this->wheul = $wheul;

        return $this;
    }

    public function getDoor()
    {
        return $this->door;
    }

    public function setDoor($door)
    {
        $this->door = $door;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}