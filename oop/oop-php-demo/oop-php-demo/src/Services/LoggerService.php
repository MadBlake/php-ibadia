<?php
namespace App\Services;

use App\Contracts\LoggerInterface;

class LoggerService implements LoggerInterface
{
    public function info(string $message): void { error_log("[INFO] " . $message); }
    public function error(string $message): void { error_log("[ERROR] " . $message); }
}
