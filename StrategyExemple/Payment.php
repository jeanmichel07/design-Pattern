<?php
require_once "PaymentMethod.php";

class Payment
{
    private $paymentMethod;

    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function performPayment($amount)
    {
        $this->paymentMethod->pay($amount);
    }
}
