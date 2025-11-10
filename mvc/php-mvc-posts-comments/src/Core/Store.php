<?php
namespace App\Core;

use PDO;
use RuntimeException;

final class Store
{
    private static ?Storage $instance = null;
    private function __construct() {}
    private function __clone() {}

    public static function init(array $cfg): void
    {
        if (self::$instance) return;
        $driver = $cfg['driver'] ?? 'array';

        if ($driver === 'array') {
            self::$instance = new ArrayStorage($cfg['seed'] ?? []);
            return;
        }

        if ($driver === 'mysql') {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s',
                $cfg['host'] ?? '127.0.0.1',
                $cfg['dbname'] ?? '',
                $cfg['charset'] ?? 'utf8mb4'
            );
            $pdo = new PDO($dsn, $cfg['user'] ?? '', $cfg['password'] ?? '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            self::$instance = new PdoStorage($pdo);
            return;
        }

        throw new RuntimeException("Driver no soportado: {$driver}");
    }

    public static function get(): Storage
    {
        if (!self::$instance) throw new RuntimeException('Store no inicializado');
        return self::$instance;
    }
}
