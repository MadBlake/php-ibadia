<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Composite\{Composite, Leaf};
$root = new Composite(); $root->add(new Leaf("a")); $child = new Composite(); $child->add(new Leaf("b")); $root->add($child);
echo $root->render(), PHP_EOL;
