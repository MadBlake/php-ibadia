<?php
namespace App\Core;

class Database
{
    private string $dsn;
    private ?\PDO $pdo = null;

    public function __construct(string $dsn = 'sqlite::memory:')
    {
        $this->dsn = $dsn;
    }

    public function connect(): void
    {
        if ($this->pdo === null) {
            $this->pdo = new \PDO($this->dsn);
        }
    }

    public function isConnected(): bool
    {
        return $this->pdo !== null;
    }
}
