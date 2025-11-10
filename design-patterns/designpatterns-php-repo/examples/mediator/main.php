<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Mediator\{DialogMediator, Button, Checkbox};
$m=new DialogMediator(); $b=new Button($m); $c=new Checkbox($m); $m->set($b,$c); $b->click(); $c->check();
