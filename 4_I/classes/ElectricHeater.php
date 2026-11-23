<?php
declare(strict_types=1);

require_once 'Toggleable.php';
require_once 'Heating.php';

class ElectricHeater implements Toggleable, Heating
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }
}