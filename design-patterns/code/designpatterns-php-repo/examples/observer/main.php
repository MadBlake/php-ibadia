<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Observer\{Subject, ConsoleObserver};
$s = new Subject(); $s->attach(new ConsoleObserver()); $s->setValue(42);
