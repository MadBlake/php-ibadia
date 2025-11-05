<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Creational\AbstractFactory\{WinFactory, MacFactory, GUIFactory};

function client(GUIFactory $f){
  echo $f->createButton()->render(), PHP_EOL;
  echo $f->createCheckbox()->check(), PHP_EOL;
}

client(new WinFactory());
client(new MacFactory());
