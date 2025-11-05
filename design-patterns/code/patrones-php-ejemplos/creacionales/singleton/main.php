<?php
final class Singleton { private static ?self $i=null; private function __construct(){} public static function getInstance(): self{ return self::$i ??= new self(); } }
$a=Singleton::getInstance(); $b=Singleton::getInstance(); var_dump($a===$b);
