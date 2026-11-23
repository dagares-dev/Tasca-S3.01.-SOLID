<?php
declare(strict_types=1);

class Drums implements Instrument
{
    public function play(): void
    {
        echo "🥁 Beating the drums\n";
    }
}