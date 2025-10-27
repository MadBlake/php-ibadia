<?php
namespace App\Abstracts;

use App\Contracts\AnimalInterface;

abstract class AbstractAnimal implements AnimalInterface
{
    protected string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    // Implementació comuna
    public function move(): string
    {
        return "{$this->name} is moving.";
    }

    abstract public function makeSound(): string;

    // Encapsulació bàsica
    public function getName(): string { return $this->name; }
    public function setName(string $name): void { $this->name = $name; }
    public function getAge(): int { return $this->age; }
}
