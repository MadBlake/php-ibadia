<?php
namespace App\Models;

class Engine
{
    private int $horsePower;

    public function __construct(int $horsePower) { $this->horsePower = $horsePower; }
    public function start(): string { return "Engine {$this->horsePower}HP started."; }
}
