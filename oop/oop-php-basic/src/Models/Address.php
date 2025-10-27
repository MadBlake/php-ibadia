<?php
namespace App\Models;

class Address
{
    public function __construct(
        private string $street,
        private string $city
    ){}

    public function __toString(): string
    {
        return "{$this->street}, {$this->city}";
    }
}
