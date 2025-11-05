<?php
class Memento { public function __construct(public string $state){} }
class Originator { private string $state='A'; public function setState(string $s){ $this->state=$s; } public function save(): Memento { return new Memento($this->state); } public function restore(Memento $m){ $this->state=$m->state; } public function show(){ echo $this->state, PHP_EOL; } }
$o=new Originator(); $o->setState('B'); $snap=$o->save(); $o->setState('C'); $o->restore($snap); $o->show();
