<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Structural\Facade\VideoConverter;
echo (new VideoConverter())->convert("demo.mp4", "ogg"), PHP_EOL;
