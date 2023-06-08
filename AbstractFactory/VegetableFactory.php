<?php
require_once "Vegetable.php";

interface VegetableFactory
{
    public function createVegetable($name, $color) : Vegetable;
}