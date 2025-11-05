<?php
class Glyph { public function __construct(public string $char){} }
class GlyphFactory { private array $pool=[]; public function get(string $c): Glyph { return $this->pool[$c] ??= new Glyph($c); } }
$f=new GlyphFactory(); $a=$f->get('A'); $b=$f->get('A'); var_dump($a===$b);
