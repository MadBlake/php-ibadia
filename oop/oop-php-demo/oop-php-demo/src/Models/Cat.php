<?php
namespace App\Models;

use App\Abstracts\AbstractAnimal;
use App\Traits\HasTimestamps;

class Cat extends AbstractAnimal
{
    use HasTimestamps;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        $this->initTimestamps();
    }

    public function makeSound(): string { return "Miau!"; }
}
