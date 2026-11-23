<?php
declare(strict_types=1);

class BankTransfer implements PaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}