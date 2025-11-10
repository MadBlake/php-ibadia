<?php
namespace DesignPatterns\Creational\Builder;

class Product { public array $parts=[]; public function list(): string { return implode(',', $this->parts); } }
interface Builder { public function reset(): void; public function addA(): void; public function addB(): void; public function get(): Product; }
class ConcreteBuilder implements Builder {
  private Product $p;
  public function __construct(){ $this->reset(); }
  public function reset(): void { $this->p = new Product(); }
  public function addA(): void { $this->p->parts[] = "A"; }
  public function addB(): void { $this->p->parts[] = "B"; }
  public function get(): Product { $r = $this->p; $this->reset(); return $r; }
}
class Director {
  public function makeMinimal(Builder $b){ $b->reset(); $b->addA(); }
  public function makeFull(Builder $b){ $b->reset(); $b->addA(); $b->addB(); }
}
