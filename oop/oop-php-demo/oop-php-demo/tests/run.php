<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\Dog;
use App\Models\Cat;
use App\Models\Car;
use App\Models\Engine;
use App\Models\Address;
use App\Models\User;
use App\Services\AnimalService;
use App\Services\LoggerService;
use App\Utils\StringUtils;

$logger = new LoggerService();

$dog = new Dog("Rex", 4);
$dog->setLogger($logger);

$cat = new Cat("Misu", 3);

$service = new AnimalService();

echo "DOG: " . $service->describe($dog) . PHP_EOL;
echo "DOG RUN: " . $dog->run() . PHP_EOL;
echo "CAT: " . $service->describe($cat) . PHP_EOL;

$car = new Car("Toyota", 120);
echo "CAR: " . $car->start() . PHP_EOL;

$address = new Address("Carrer Major 10", "Barcelona");
$user = new User("Anna", $address);
echo "USER: " . $user->getName() . " | " . $user->getAddress() . PHP_EOL;

echo "SLUG: " . StringUtils::slug("Hola Món! POO en PHP") . PHP_EOL;
