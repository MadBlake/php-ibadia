<?php
namespace App\Traits;

trait LoggableTrait
{
    protected function logInfo(string $message): void
    {
        error_log("[INFO] " . $message);
    }
}
