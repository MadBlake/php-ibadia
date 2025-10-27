<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\Car;

$car = new Car("Toyota", 120);

echo "<pre>";
echo $car->start() . PHP_EOL;
echo "</pre>";
