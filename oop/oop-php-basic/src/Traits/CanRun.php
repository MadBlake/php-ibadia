<?php
namespace App\Traits;

trait CanRun
{
    public function run(): string
    {
        return get_class($this) . " is running!";
    }
}
