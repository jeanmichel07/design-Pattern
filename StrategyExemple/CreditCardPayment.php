<?php
require_once "PaymentMethod.php";

class CreditCardPayment implements PaymentMethod
{
    public function pay($amount)
    {
        echo "Paiement de $amount € par carte de crédit effectué avec succès.<br/>";
    }
}