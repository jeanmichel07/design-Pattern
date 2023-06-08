<?php
require_once "CarBuilder.php";

$carBuilder = new CarBuilder();
$carBuilder->setBrand("Toyota");
$carBuilder->setModel("Camry");
$carBuilder->setColor("Red");
$carBuilder->setPower("200hp");

$carToyota = $carBuilder->getCar();
echo $carToyota->getCarDetails();