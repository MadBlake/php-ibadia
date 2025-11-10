<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Decorator\{SMSDecorator, BasicNotifier};
echo (new SMSDecorator(new BasicNotifier()))->send("Hola"), PHP_EOL;
