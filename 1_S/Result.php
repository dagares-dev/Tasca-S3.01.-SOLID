<?php
declare(strict_types=1);

class Result {
    public function __construct(
        private Athlete $athlete,
        private string $medal
    ) {}

    public function getAthlete(): Athlete {
        return $this->athlete;
    }

    public function getMedal(): string {
        return $this->medal;
    }
}