<?php
declare(strict_types=1);

require_once 'Athlete.php';
require_once 'Result.php';
require_once 'Event.php';
require_once 'OlympicGames.php';
require_once 'OlympicGamesInformationPrinter.php';

$athlete1 = new Athlete('Usain Bolt', 'Jamaica');
$athlete2 = new Athlete('Michael Phelps', 'USA');

$event1 = new Event('100m Sprint', '2024-08-01');
$event1->addResult(new Result($athlete1, 'Gold'));

$event2 = new Event('Swimming', '2024-08-02');
$event2->addResult(new Result($athlete2, 'Gold'));

$games = new OlympicGames();
$games->addEvent($event1);
$games->addEvent($event2);

$printer = new OlympicGamesInformationPrinter();
$printer->printInformation($games);