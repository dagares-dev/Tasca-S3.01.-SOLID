<?php
declare(strict_types=1);

class PaypalPaymentGateway implements PaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}