<?php

// Interface abstraite des personnages
interface Personnage
{
    public function afficher(): string;
    public function nom(): string;
    public function prenom(): string;
}