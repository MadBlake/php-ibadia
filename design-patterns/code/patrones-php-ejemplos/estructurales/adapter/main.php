<?php
interface Target { public function request(): string; }
class Adaptee { public function specific(): string { return "Específico"; } }
class Adapter implements Target { public function __construct(private Adaptee $a){} public function request(): string { return "Adaptado: ".$this->a->specific(); } }
echo (new Adapter(new Adaptee()))->request(), PHP_EOL;
