<?php
interface Notifier { public function send(string $msg): string; }
class BasicNotifier implements Notifier { public function send(string $msg): string { return "Base: $msg"; } }
abstract class NotifierDecorator implements Notifier { public function __construct(protected Notifier $wrap){} }
class SMSDecorator extends NotifierDecorator { public function send(string $msg): string { return $this->wrap->send($msg)." + SMS"; } }
echo (new SMSDecorator(new BasicNotifier()))->send("Hola"), PHP_EOL;
