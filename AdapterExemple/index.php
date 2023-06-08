<?php
require_once "Square.php";
require_once "SquareAdapter.php";

// Utilisation de l'adaptateur avec un carré
$square = new Square(5);
$squareAdapter = new SquareAdapter($square);
echo $squareAdapter->getArea(); // Affiche 25