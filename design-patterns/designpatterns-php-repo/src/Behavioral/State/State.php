<?php
namespace DesignPatterns\Behavioral\State;

interface State { public function handle(Context $c): void; }
class Context { public function __construct(public State $state){} public function request(){ $this->state->handle($this);} }
class On implements State { public function handle(Context $c): void { echo "ON->OFF\n"; $c->state = new Off(); } }
class Off implements State { public function handle(Context $c): void { echo "OFF->ON\n"; $c->state = new On(); } }
