<?php
class MyCollection implements IteratorAggregate
{
    public function __construct(private array $items) {}
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
foreach (new MyCollection([1, 2, 3]) as $i) echo $i, PHP_EOL;
