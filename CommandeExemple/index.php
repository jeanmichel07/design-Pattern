<?php
require_once "Lampe.php";
require_once "CommandeAllumerLampe.php";
require_once "CommandeEteindreLampe.php";
require_once "Interrupteur.php";


$lampe = new Lampe();

$commandeAllumer = new CommandeAllumerLampe($lampe);
$commandeEteindre = new CommandeEteindreLampe($lampe);

$interrupteur = new Interrupteur();

// Allumer la lampe
$interrupteur->setCommande($commandeAllumer);
$interrupteur->appuyerInterrupteur();

// Éteindre la lampe
$interrupteur->setCommande($commandeEteindre);
$interrupteur->appuyerInterrupteur();