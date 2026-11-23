<?php
declare(strict_types=1);

class OlympicGames {
    private array $events = [];

    public function addEvent(Event $event): void {
        $this->events[] = $event;
    }

    public function getEvents(): array {
        return $this->events;
    }
}