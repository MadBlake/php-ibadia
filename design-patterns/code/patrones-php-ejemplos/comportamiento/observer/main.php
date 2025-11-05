<?php
interface Observer
{
    public function update(int $v): void;
}
class Subject
{
    private array $obs = [];
    private int $v = 0;
    public function attach(Observer $o)
    {
        $this->obs[] = $o;
    }
    public function setValue(int $v)
    {
        $this->v = $v;
        foreach ($this->obs as $o) {
            $o->update($v);
        }
    }
}
class ConsoleObserver implements Observer
{
    public function update(int $v): void
    {
        echo "valor=$v\n";
    }
}
$s = new Subject();
$s->attach(new ConsoleObserver());
$s->setValue(42);
