<?php
declare(strict_types=1);

class OlympicGamesInformationPrinter {
    public function printInformation(OlympicGames $games): void {
        echo "Olympic Games Results:\n";
        foreach ($games->getEvents() as $event) {
            $this->printEvent($event);
        }
    }

    private function printEvent(Event $event): void {
        echo "Event: " . $event->getName() . " on " . $event->getDate() . "\n";
        foreach ($event->getResults() as $result) {
            $this->printResult($result);
        }
    }

    private function printResult(Result $result): void {
        echo "- ";
        $this->printAthlete($result->getAthlete());
        echo " won " . $result->getMedal() . "\n";
    }

    private function printAthlete(Athlete $athlete): void {
        echo $athlete->getName() . " from " . $athlete->getCountry();
    }
}