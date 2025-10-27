<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\Address;
use App\Models\User;

$address = new Address("Carrer Major 10", "Barcelona");
$user = new User("Anna", $address);

echo "<pre>";
echo "USER: " . $user->getName() . PHP_EOL;
echo "ADDRESS: " . $user->getAddress() . PHP_EOL;
echo "</pre>";
