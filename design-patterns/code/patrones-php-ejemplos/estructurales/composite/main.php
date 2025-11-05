<?php
interface Component { public function render(): string; }
class Leaf implements Component { public function __construct(private string $name){} public function render(): string { return $this->name; } }
class Composite implements Component { private array $children=[]; public function add(Component $c){ $this->children[]=$c; } public function render(): string { return "(".implode(",", array_map(fn($c)=>$c->render(), $this->children)).")"; } }
$root=new Composite(); $root->add(new Leaf("a")); $child=new Composite(); $child->add(new Leaf("b")); $root->add($child); echo $root->render(), PHP_EOL;
