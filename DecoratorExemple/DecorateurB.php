<?php
require_once "Decorateur.php";

class DecorateurB extends Decorateur
{
    public function operation(): string {
        $result = parent::operation();
        $result .= "Fonctionnalité B ajoutée.\n";
        return $result;
    }
}