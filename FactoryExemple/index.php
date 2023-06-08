<?php
require_once "VehicleFactory.php";

// Exemple d'utilisation de la factory pour créer un véhicule

$car = VehicleFactory::createVehicle('car');
$car->start();
$car->stop();

$motorcycle = VehicleFactory::createVehicle('motorcycle');
$motorcycle->start();
$motorcycle->stop();

$truck = VehicleFactory::createVehicle('truck');
$truck->start();
$truck->stop();