<?php
require_once "Commande.php";
require_once "Lampe.php";

// Commande Concrète pour Éteindre la lampe
class CommandeEteindreLampe implements Commande {
    private $lampe;

    public function __construct(Lampe $lampe) {
        $this->lampe = $lampe;
    }

    public function execute() {
        $this->lampe->éteindre();
    }
}