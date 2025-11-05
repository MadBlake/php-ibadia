<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\Visitor\{Text, Image, HtmlVisitor};
$doc = [new Text("hola"), new Image("a.png")];
$v = new HtmlVisitor(); foreach($doc as $el) $el->accept($v);
