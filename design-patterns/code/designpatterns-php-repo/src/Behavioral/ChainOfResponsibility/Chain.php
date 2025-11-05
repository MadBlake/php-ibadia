<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class Handler
{
  private ?Handler $next = null;
  public function setNext(Handler $h): Handler
  {
    $this->next = $h;
    return $h;
  }
  public function handle(string $req): ?string
  {
    return $this->next ? $this->next->handle($req) : null;
  }
}
class AuthHandler extends Handler
{
  public function handle(string $req): ?string
  {
    return $req === "auth" ? "OK auth" : parent::handle($req);
  }
}
class LogHandler extends Handler
{
  public function handle(string $req): ?string
  {
    echo "log ";
    return parent::handle($req);
  }
}
