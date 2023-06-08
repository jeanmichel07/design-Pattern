<?php
require_once "PersonnageFactory.php";
require_once "Mage.php";

// Classe concrète de la factory pour la faction Horde
class HordeFactory implements PersonnageFactory
{
    public function créerPersonnage(): Personnage
    {
        return new Guerrier();
    }
}