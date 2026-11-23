<?php
declare(strict_types=1);

class StripePaymentGateway implements PaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}