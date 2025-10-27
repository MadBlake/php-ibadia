<?php
namespace App\Contracts;

interface AnimalInterface
{
    public function makeSound(): string;
    public function move(): string;
}
