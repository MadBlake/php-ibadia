<?php
namespace App\Models;

use App\Abstracts\AbstractAnimal;
use App\Traits\HasTimestamps;
use App\Traits\CanRun;
use App\Traits\LoggableTrait;

class Dog extends AbstractAnimal
{
    use HasTimestamps, CanRun, LoggableTrait;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        $this->initTimestamps();
        $this->logInfo("Dog '{$this->name}' created.");
    }

    public function makeSound(): string { return "Bup!"; }

    public function move(): string { return "{$this->name} is trotting."; }
}
