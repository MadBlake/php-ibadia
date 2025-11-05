<?php
namespace DesignPatterns\Creational\Prototype;

class Prototype {
  public int $x; public array $meta;
  public function __construct(int $x, array $meta){ $this->x=$x; $this->meta=$meta; }
  public function __clone(){ $this->meta = $this->meta; }
}
