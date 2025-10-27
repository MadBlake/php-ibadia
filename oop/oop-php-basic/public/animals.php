<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\Dog;
use App\Models\Cat;

$dog = new Dog("Rex", 4);
$cat = new Cat("Misu", 3);

echo "<pre>";
echo "DOG SOUND: " . $dog->makeSound() . PHP_EOL;
echo "DOG MOVE: " . $dog->move() . PHP_EOL;
echo "DOG RUN: " . $dog->run() . PHP_EOL;
echo "CAT SOUND: " . $cat->makeSound() . PHP_EOL;
echo "CAT MOVE: " . $cat->move() . PHP_EOL;
echo "</pre>";
