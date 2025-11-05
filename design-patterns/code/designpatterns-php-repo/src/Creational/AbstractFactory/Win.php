<?php
namespace DesignPatterns\Creational\AbstractFactory;

class WinButton implements Button { public function render(): string { return "WinButton"; } }
class WinCheckbox implements Checkbox { public function check(): string { return "WinCheckbox"; } }
class WinFactory implements GUIFactory {
  public function createButton(): Button { return new WinButton(); }
  public function createCheckbox(): Checkbox { return new WinCheckbox(); }
}
