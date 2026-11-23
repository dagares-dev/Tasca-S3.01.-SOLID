<?php
declare(strict_types=1);

class Athlete {
    public function __construct(
        private string $name,
        private string $country
    ) {}

    public function getName(): string {
        return $this->name;
    }

    public function getCountry(): string {
        return $this->country;
    }
}