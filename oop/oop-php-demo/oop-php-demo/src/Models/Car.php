<?php
namespace App\Models;

use App\Traits\HasTimestamps;

class Car
{
    use HasTimestamps;

    private Engine $engine;
    private string $brand;

    public function __construct(string $brand, int $hp)
    {
        $this->brand = $brand;
        $this->engine = new Engine($hp);
        $this->initTimestamps();
    }

    public function start(): string
    {
        return "{$this->brand}: " . $this->engine->start();
    }
}
