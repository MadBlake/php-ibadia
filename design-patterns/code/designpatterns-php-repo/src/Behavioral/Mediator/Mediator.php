<?php
namespace DesignPatterns\Behavioral\Mediator;

interface Mediator { public function notify(object $sender, string $event): void; }
class Button { public function __construct(private Mediator $m){} public function click(){ $this->m->notify($this,'click'); } }
class Checkbox { public function __construct(private Mediator $m){} public function check(){ $this->m->notify($this,'check'); } }
class DialogMediator implements Mediator {
  public function __construct(private ?Button $b=null, private ?Checkbox $c=null){}
  public function set(Button $b, Checkbox $c){ $this->b=$b; $this->c=$c; }
  public function notify(object $s,string $e): void { if($s===$this->b && $e==='click') echo "Btn->toggle\n"; if($s===$this->c && $e==='check') echo "Chk->changed\n"; }
}
