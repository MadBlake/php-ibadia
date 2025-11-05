<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Iterator\MyCollection;
foreach (new MyCollection([1,2,3]) as $i) echo $i, PHP_EOL;
