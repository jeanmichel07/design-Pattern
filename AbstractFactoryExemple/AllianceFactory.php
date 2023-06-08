<?php
require_once "PersonnageFactory.php";
require_once "Guerrier.php";

// Classe concrète de la factory pour la faction Alliance
class AllianceFactory implements PersonnageFactory
{
    public function créerPersonnage(): Personnage
    {
        return new Guerrier();
    }
}