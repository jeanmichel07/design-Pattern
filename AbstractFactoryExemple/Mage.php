<?php
require_once "Personnage.php";

// Classe concrète pour le Mage de la faction Horde
class Mage implements Personnage
{

    public function afficher(): string
    {
        return "Je suis un Mage de la Horde.";
    }

    public function nom(): string
    {
        return "Sitraka";
    }

    public function prenom(): string
    {
        return "Rajao";
    }
}