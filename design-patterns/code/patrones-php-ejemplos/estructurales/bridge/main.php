<?php
interface Device { public function on(): string; public function off(): string; }
class TV implements Device { public function on(): string { return "TV on"; } public function off(): string { return "TV off"; } }
class Radio implements Device { public function on(): string { return "Radio on"; } public function off(): string { return "Radio off"; } }
class Remote { public function __construct(private Device $d){} public function toggle(bool $p): string { return $p?$this->d->on():$this->d->off(); } }
echo (new Remote(new TV()))->toggle(True), PHP_EOL; echo (new Remote(new Radio()))->toggle(False), PHP_EOL;
