<?php
namespace DesignPatterns\Creational\AbstractFactory;

interface Button { public function render(): string; }
interface Checkbox { public function check(): string; }

interface GUIFactory {
  public function createButton(): Button;
  public function createCheckbox(): Checkbox;
}
