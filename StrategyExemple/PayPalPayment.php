<?php
require_once "PaymentMethod.php";

class PayPalPayment implements PaymentMethod
{
    public function pay($amount)
    {
        echo "Paiement de $amount € via PayPal effectué avec succès.<br/>";
    }
}