<?php
declare(strict_types=1);

require_once 'Toggleable.php';
require_once 'Washing.php';

class WashingMachine implements Toggleable, Washing
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}