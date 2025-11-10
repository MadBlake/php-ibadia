<?php
namespace DesignPatterns\Structural\Adapter;

interface Target { public function request(): string; }
class Adaptee { public function specific(): string { return "Específico"; } }
class Adapter implements Target {
  public function __construct(private Adaptee $adaptee){}
  public function request(): string { return "Adaptado: ".$this->adaptee->specific(); }
}
