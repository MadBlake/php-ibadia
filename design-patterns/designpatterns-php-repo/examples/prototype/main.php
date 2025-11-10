<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Creational\Prototype\Prototype;
$a = new Prototype(10, ["k"=>"v"]);
$b = clone $a; $b->x = 99;
echo $a->x, "/", $b->x, PHP_EOL;
