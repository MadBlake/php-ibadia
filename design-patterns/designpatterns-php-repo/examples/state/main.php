<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\State\{Context, Off};
$c=new Context(new Off()); $c->request(); $c->request();
