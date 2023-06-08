<?php
require_once "Decorateur.php";

class DecorateurA extends Decorateur
{
    public function operation(): string {
        $result = parent::operation();
        $result .= "Fonctionnalité A ajoutée.\n";
        return $result;
    }
}