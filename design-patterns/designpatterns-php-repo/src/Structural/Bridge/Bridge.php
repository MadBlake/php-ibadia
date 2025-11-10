<?php
namespace DesignPatterns\Structural\Bridge;

interface Device { public function on(): string; public function off(): string; }
class TV implements Device { public function on(): string { return "TV on"; } public function off(): string { return "TV off"; } }
class Radio implements Device { public function on(): string { return "Radio on"; } public function off(): string { return "Radio off"; } }

class Remote {
  public function __construct(private Device $dev){}
  public function toggle(bool $pwr): string { return $pwr ? $this->dev->on() : $this->dev->off(); }
}
