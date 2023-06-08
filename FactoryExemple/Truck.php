<?php
require_once "Vehicule.php";

// Implémentation du camion
class Truck implements Vehicule
{
    public function start() {
        echo "Le camion démarre." . PHP_EOL;
    }

    public function stop() {
        echo "Le camion s'arrête." . PHP_EOL;
    }
}