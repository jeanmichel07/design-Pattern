<?php
require_once "Impl1.php";
require_once "Impl2.php";

$impl1 = new Impl1();
$impl1->templateMethod();
// Output:
// Étape 1 commune à toutes les implémentations
// Implémentation 1 de l'étape 2
// Étape 3 commune à toutes les implémentations

$impl2 = new Impl2();
$impl2->templateMethod();
// Output:
// Étape 1 commune à toutes les implémentations
// Implémentation 2 de l'étape 2
// Étape 3 commune à toutes les implémentations
