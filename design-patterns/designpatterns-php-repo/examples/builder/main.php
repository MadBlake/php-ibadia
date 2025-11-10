<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Creational\Builder\{Director, ConcreteBuilder};

$d=new Director(); $b=new ConcreteBuilder();
$d->makeMinimal($b); echo $b->get()->list(), PHP_EOL;
$d->makeFull($b); echo $b->get()->list(), PHP_EOL;
