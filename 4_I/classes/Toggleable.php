<?php
declare(strict_types=1);

interface Toggleable
{
    public function turnOn(): void;
    public function turnOff(): void;
}