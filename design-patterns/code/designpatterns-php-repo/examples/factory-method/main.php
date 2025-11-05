<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Creational\FactoryMethod\{RoadLogistics, SeaLogistics};

echo (new RoadLogistics())->planDelivery(), PHP_EOL;
echo (new SeaLogistics())->planDelivery(), PHP_EOL;
