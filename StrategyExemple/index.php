<?php
require_once "Payment.php";
require_once "CreditCardPayment.php";
require_once "PayPalPayment.php";

// Créez une instance de la classe principale Payment
$payment = new Payment();

// Définissez le mode de paiement sur "Carte de crédit"
$payment->setPaymentMethod(new CreditCardPayment());

// Effectuez un paiement de 100 €
$payment->performPayment(100);

// Changez le mode de paiement sur "PayPal"
$payment->setPaymentMethod(new PayPalPayment());

// Effectuez un autre paiement de 50 €
$payment->performPayment(50);