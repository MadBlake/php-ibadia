<?php
class Product { public array $parts=[]; public function list(): string { return implode(',', $this->parts); } }
interface Builder { public function reset(); public function addA(); public function addB(); public function get(): Product; }
class ConcreteBuilder implements Builder { private Product $p; public function __construct(){ $this->reset(); } public function reset(){ $this->p=new Product(); } public function addA(){ $this->p->parts[]="A"; } public function addB(){ $this->p->parts[]="B"; } public function get(): Product{ $r=$this->p; $this->reset(); return $r; } }
class Director { public function makeMinimal(Builder $b){ $b->reset(); $b->addA(); } public function makeFull(Builder $b){ $b->reset(); $b->addA(); $b->addB(); } }
$d=new Director(); $b=new ConcreteBuilder(); $d->makeMinimal($b); echo $b->get()->list(), PHP_EOL; $d->makeFull($b); echo $b->get()->list(), PHP_EOL;
