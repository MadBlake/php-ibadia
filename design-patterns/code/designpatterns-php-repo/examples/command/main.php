<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Command\{Invoker, DoIt, Receiver};
(new Invoker(new DoIt(new Receiver())))->run();
