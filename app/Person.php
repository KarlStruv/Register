<?php

namespace App;

class Person
{
    private string $name;
    private string $surname;
    private string $personalNumber;
    private string $description;

    public function __construct(string $name, string $surname, string $personalNumber, string $description)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->personalNumber = $personalNumber;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPersonalNumber(): string
    {
        return $this->personalNumber;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}