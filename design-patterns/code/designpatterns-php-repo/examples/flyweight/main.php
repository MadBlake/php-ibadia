<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Flyweight\GlyphFactory;
$f = new GlyphFactory(); $a = $f->get('A'); $b = $f->get('A'); var_dump($a === $b);
