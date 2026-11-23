<?php
declare(strict_types=1);

class InstrumentPlayer
{
    public function playInstrument(Instrument $instrument): void
    {
        $instrument->play();
    }
}