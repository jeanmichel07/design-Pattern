<?php

require_once "Vehicule.php";

// Implémentation de la voiture
class Car implements Vehicule
{
    public function start() {
        echo "La voiture démarre." . PHP_EOL;
    }

    public function stop() {
        echo "La voiture s'arrête." . PHP_EOL;
    }
}