<?php
namespace DesignPatterns\Behavioral\Command;

interface Command { public function execute(): void; }
class Receiver { public function action(){ echo "Hecho\n"; } }
class DoIt implements Command { public function __construct(private Receiver $r){} public function execute(): void { $this->r->action(); } }
class Invoker { public function __construct(private Command $c){} public function run(){ $this->c->execute(); } }
