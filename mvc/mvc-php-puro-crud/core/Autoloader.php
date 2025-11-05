<?php
namespace Core;
final class Autoloader {
    public static function register(array $prefixes): void {
        spl_autoload_register(function ($class) use ($prefixes) {
            foreach ($prefixes as $prefix => $baseDir) {
                $len = strlen($prefix);
                if (strncmp($prefix, $class, $len) !== 0) continue;
                $relativeClass = substr($class, $len);
                $file = $baseDir . '/' . str_replace('\\', '/', $relativeClass) . '.php';
                if (is_file($file)) { require $file; return; }
            }
        });
    }
}
