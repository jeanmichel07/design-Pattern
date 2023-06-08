<?php
require_once "ComposantConcret.php";
require_once "DecorateurA.php";
require_once "DecorateurB.php";

// Création d'un composant concret
$composant = new ComposantConcret();

// Utilisation du décorateur A
$decorateurA = new DecorateurA($composant);
$resultA = $decorateurA->operation();
echo $resultA;
// Résultat : Opération du composant concret.
//           Fonctionnalité A ajoutée.

// Utilisation du décorateur B
$decorateurB = new DecorateurB($composant);
$resultB = $decorateurB->operation();
echo $resultB;
// Résultat : Opération du composant concret.
//           Fonctionnalité B ajoutée.