<?php
require_once "Composant.php";

class ComposantConcret implements Composant
{

    public function operation(): string
    {
        return "Opération du composant concret.\n";
    }
}