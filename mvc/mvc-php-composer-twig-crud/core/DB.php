<?php
namespace Core;
use PDO, PDOException;
final class DB {
    private static ?PDO $pdo = null;
    public static function init(array $cfg): void {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', $cfg['host'], $cfg['database'], $cfg['charset'] ?? 'utf8mb4');
        try {
            self::$pdo = new PDO($dsn, $cfg['user'], $cfg['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            http_response_code(500);
            die('Error de conexión DB: ' . htmlspecialchars($e->getMessage()));
        }
    }
    public static function pdo(): PDO {
        if (!self::$pdo) { throw new \RuntimeException('DB no inicializada'); }
        return self::$pdo;
    }
}
