<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Creational\Singleton\Singleton;

$a = Singleton::getInstance();
$b = Singleton::getInstance();
var_dump($a === $b);
