<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Memento\Originator;
$o = new Originator(); $o->setState('B'); $snap=$o->save(); $o->setState('C'); $o->restore($snap); $o->show();
