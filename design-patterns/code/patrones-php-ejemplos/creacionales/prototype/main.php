<?php
class Prototype { public int $x; public array $meta; public function __construct($x,$meta){ $this->x=$x; $this->meta=$meta; } public function __clone(){ $this->meta=$this->meta; } }
$a=new Prototype(10,["k"=>"v"]); $b=clone $a; $b->x=99; echo $a->x,"/",$b->x, PHP_EOL;
