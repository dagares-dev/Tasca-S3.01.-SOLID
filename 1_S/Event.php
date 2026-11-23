<?php
declare(strict_types=1);

class Event {
    private array $results = [];

    public function __construct(
        private string $name,
        private string $date
    ) {}

    public function addResult(Result $result): void {
        $this->results[] = $result;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getResults(): array {
        return $this->results;
    }
}