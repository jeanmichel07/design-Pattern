<?php
require_once "Personnage.php";

// Classe concrète pour le Guerrier de la faction Alliance
class Guerrier implements Personnage
{

    public function afficher(): string
    {
        return "Je suis un Guerrier de l'Alliance.";
    }

    public function nom(): string
    {
        return "Eric";
    }

    public function prenom(): string
    {
        return "Mamy";
    }
}