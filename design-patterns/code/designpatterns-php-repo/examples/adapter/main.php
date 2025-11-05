<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Adapter\{Adapter, Adaptee};
echo (new Adapter(new Adaptee()))->request(), PHP_EOL;
