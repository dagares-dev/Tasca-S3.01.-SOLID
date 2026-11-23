<?php
declare(strict_types=1);

class Piano implements Instrument
{
    public function play(): void
    {
        echo "🎹 Playing the piano\n";
    }
}