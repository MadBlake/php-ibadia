<?php
namespace App\Controllers;

use App\Models\Dog;
use App\Models\Cat;
use App\Services\AnimalService;
use App\Services\LoggerService;

class AnimalController
{
    public function list(): string
    {
        $logger = new LoggerService();

        $dog = new Dog("Rex", 4);
        $dog->setLogger($logger);

        $cat = new Cat("Misu", 3);

        $service = new AnimalService();

        $details = [
            'dog' => $service->describe($dog) . ' | ' . $dog->run(),
            'cat' => $service->describe($cat),
        ];

        return "<pre>" . print_r($details, true) . "</pre>";
    }
}
