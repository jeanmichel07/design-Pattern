<?php
require_once "CarBuilderInterface.php";
require_once "Car.php";

class CarBuilder implements CarBuilderInterface
{
    private $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function setBrand($brand)
    {
        $this->car->setBrand($brand);
    }

    public function setModel($model)
    {
        $this->car->setModel($model);
    }

    public function setColor($color)
    {
        $this->car->setColor($color);
    }

    public function setPower($power)
    {
        $this->car->setPower($power);
    }

    public function getCar()
    {
        return $this->car;
    }
}