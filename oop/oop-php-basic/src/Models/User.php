<?php
namespace App\Models;

use App\Traits\HasTimestamps;

class User
{
    use HasTimestamps;

    private string $name;
    private Address $address;

    public function __construct(string $name, Address $address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->initTimestamps();
    }

    public function getName(): string { return $this->name; }
    public function getAddress(): Address { return $this->address; }
}
