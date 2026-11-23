<?php
declare(strict_types=1);

class Guitar implements Instrument
{
    public function play(): void
    {
        echo "🎸 Strumming the guitar\n";
    }
}