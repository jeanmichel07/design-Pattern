<?php
require_once "Car.php";
require_once "Motorcycle.php";
require_once "Truck.php";

// Factory pour créer les véhicules
class VehicleFactory
{
    public static function createVehicle($type) {
        switch ($type) {
            case 'car':
                return new Car();
            case 'motorcycle':
                return new Motorcycle();
            case 'truck':
                return new Truck();
            default:
                throw new Exception("Type de véhicule inconnu.");
        }
    }
}