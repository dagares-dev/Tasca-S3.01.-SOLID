<?php
declare(strict_types=1);

class PaymentProcessor
{
    public function __construct(private PaymentGateway $gateway) {}

    public function processPayment(float $amount): string
    {
        return $this->gateway->sendPayment($amount);
    }
}