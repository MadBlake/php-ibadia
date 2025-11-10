<?php
namespace DesignPatterns\Structural\Flyweight;

class Glyph { public function __construct(public string $char){} }
class GlyphFactory {
  private array $pool=[];
  public function get(string $c): Glyph { return $this->pool[$c] ??= new Glyph($c); }
}
