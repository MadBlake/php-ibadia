<?php
interface Button { public function render(): string; }
interface Checkbox { public function check(): string; }
class WinButton implements Button { public function render(): string { return "WinButton"; } }
class MacButton implements Button { public function render(): string { return "MacButton"; } }
class WinCheckbox implements Checkbox { public function check(): string { return "WinCheckbox"; } }
class MacCheckbox implements Checkbox { public function check(): string { return "MacCheckbox"; } }
interface GUIFactory { public function createButton(): Button; public function createCheckbox(): Checkbox; }
class WinFactory implements GUIFactory { public function createButton(): Button { return new WinButton(); } public function createCheckbox(): Checkbox { return new WinCheckbox(); } }
class MacFactory implements GUIFactory { public function createButton(): Button { return new MacButton(); } public function createCheckbox(): Checkbox { return new MacCheckbox(); } }
function clientCode(GUIFactory $f){ echo $f->createButton()->render(), PHP_EOL; echo $f->createCheckbox()->check(), PHP_EOL; }
clientCode(new WinFactory()); clientCode(new MacFactory());
