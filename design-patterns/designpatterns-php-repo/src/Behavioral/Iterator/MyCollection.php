<?php
namespace DesignPatterns\Behavioral\Iterator;

use IteratorAggregate, Traversable, ArrayIterator;

class MyCollection implements IteratorAggregate {
  public function __construct(private array $items){}
  public function getIterator(): Traversable { return new ArrayIterator($this->items); }
}
