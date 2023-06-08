<?php
require_once "AllianceFactory.php";
require_once "HordeFactory.php";

// Utilisation du pattern Abstract Factory
$factoryAlliance = new AllianceFactory();
$personnageAlliance = $factoryAlliance->créerPersonnage();
echo $personnageAlliance->afficher(); // Affiche "Je suis un Guerrier de l'Alliance."

$factoryHorde = new HordeFactory();
$personnageHorde = $factoryHorde->créerPersonnage();
echo $personnageHorde->afficher(); // Affiche "Je suis un Mage de la Horde."