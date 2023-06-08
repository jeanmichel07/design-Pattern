<?php

// Interface abstraite de la factory
interface PersonnageFactory
{
    public function créerPersonnage(): Personnage;
}