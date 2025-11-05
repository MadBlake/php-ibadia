<?php
abstract class Handler
{
    private ?Handler $next = null;
    public function setNext(Handler $h): Handler
    {
        $this->next = $h;
        return $h;
    }
    public function handle(string $r): ?string
    {
        return $this->next ? $this->next->handle($r) : null;
    }
}
class AuthHandler extends Handler
{
    public function handle(string $r): ?string
    {
        return $r === 'auth' ? 'OK auth' : parent::handle($r);
    }
}
class LogHandler extends Handler
{
    public function handle(string $r): ?string
    {
        echo 'log ';
        return parent::handle($r);
    }
}
$h1 = new AuthHandler();
$h1->setNext(new LogHandler());
echo $h1->handle('auth'), PHP_EOL;
