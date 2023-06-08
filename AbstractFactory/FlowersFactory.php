<?php
require_once "VegetableFactory.php";
require_once "Flowers.php";
require_once "Vegetable.php";

class FlowersFactory implements VegetableFactory
{
    public function createVegetable($name, $color): Vegetable
    {
        return new Flowers($name, $color);
    }
}