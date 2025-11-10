<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Proxy\ImageProxy;
echo (new ImageProxy("foto.png"))->display(), PHP_EOL;
