<?php
class VideoFile { public function __construct(public string $name){} }
class VideoConverter { public function convert(string $file,string $to): string { $v=new VideoFile($file); return "Convertido {$v->name} a {$to}"; } }
echo (new VideoConverter())->convert("demo.mp4","ogg"), PHP_EOL;
