<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\ChainOfResponsibility\{AuthHandler, LogHandler};

$h1 = new AuthHandler();
$h1->setNext(new LogHandler());
echo $h1->handle("auth"), PHP_EOL;
