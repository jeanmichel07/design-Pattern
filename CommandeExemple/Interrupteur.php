<?php
require_once "Commande.php";

// Classe Invocateur
class Interrupteur {
    private $commande;

    public function setCommande(Commande $commande) {
        $this->commande = $commande;
    }

    public function appuyerInterrupteur() {
        $this->commande->execute();
    }
}