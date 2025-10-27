<?php
namespace App\Services;

use App\Contracts\AnimalInterface;

class AnimalService
{
    public function describe(AnimalInterface $animal): string
    {
        return $animal->makeSound() . ' | ' . $animal->move();
    }
}
