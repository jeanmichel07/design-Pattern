<?php
require_once "Vegetable.php";
require_once "Leafys.php";


class LeafyFactory implements VegetableFactory
{
    public function createVegetable($name, $color): Vegetable
    {
        return new Leafys($name, $color);
    }
}