<?php
require_once "Vehicule.php";

// Implémentation de la moto
class Motorcycle implements Vehicule
{
    public function start() {
        echo "La moto démarre." . PHP_EOL;
    }

    public function stop() {
        echo "La moto s'arrête." . PHP_EOL;
    }
}