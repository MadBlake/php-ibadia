<?php
interface Image { public function display(): string; }
class RealImage implements Image { public function __construct(private string $path){} public function display(): string { return "Mostrar ".$this->path; } }
class ImageProxy implements Image { private ?RealImage $real=null; public function __construct(private string $path){} public function display(): string { if(!$this->real) $this->real=new RealImage($this->path); return $this->real->display(); } }
echo (new ImageProxy("foto.png"))->display(), PHP_EOL;
