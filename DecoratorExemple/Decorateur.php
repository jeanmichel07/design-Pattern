<?php
require_once "Composant.php";

abstract class Decorateur implements Composant
{
    protected $composant;

    public function __construct(Composant $composant) {
        $this->composant = $composant;
    }

    public function operation(): string {
        return $this->composant->operation();
    }
}