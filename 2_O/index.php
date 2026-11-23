<?php
declare(strict_types=1);

require_once 'Instrument.php';
require_once 'Guitar.php';
require_once 'Drums.php';
require_once 'Piano.php';
require_once 'InstrumentPlayer.php';

$player = new InstrumentPlayer();
$player->playInstrument(new Guitar());
$player->playInstrument(new Drums());
$player->playInstrument(new Piano());