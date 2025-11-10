<?php
namespace DesignPatterns\Creational\AbstractFactory;

class MacButton implements Button { public function render(): string { return "MacButton"; } }
class MacCheckbox implements Checkbox { public function check(): string { return "MacCheckbox"; } }
class MacFactory implements GUIFactory {
  public function createButton(): Button { return new MacButton(); }
  public function createCheckbox(): Checkbox { return new MacCheckbox(); }
}
