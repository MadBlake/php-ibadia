<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Bridge\{Remote, TV, Radio};
echo (new Remote(new TV()))->toggle(true), PHP_EOL;
echo (new Remote(new Radio()))->toggle(false), PHP_EOL;
