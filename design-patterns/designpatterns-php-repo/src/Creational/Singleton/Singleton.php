<?php

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{
  private static ?self $i = null;
  private function __construct() {}
  public static function getInstance(): self
  {
    return self::$i ??= new self();
  }
}
