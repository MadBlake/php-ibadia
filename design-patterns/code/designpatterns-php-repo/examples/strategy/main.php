<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Strategy\{Context, QuickSort};
print_r((new Context(new QuickSort()))->run([3,1,2]));
