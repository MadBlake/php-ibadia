<?php
namespace App\Core;

final class ArrayStorage implements Storage
{
    private array $tables = [];
    private array $seq = [];

    public function __construct(array $seed = [])
    {
        foreach ($seed as $table => $rows) {
            $this->tables[$table] = [];
            $this->seq[$table] = 0;
            foreach ($rows as $row) $this->insert($table, $row);
        }
    }

    public function insert(string $table, array $data): int
    {
        $this->ensureTable($table);
        $id = ++$this->seq[$table];
        $this->tables[$table][$id] = ['id' => $id] + $data;
        return $id;
    }

    public function update(string $table, int $id, array $data): bool
    {
        if (!isset($this->tables[$table][$id])) return false;
        $this->tables[$table][$id] = array_merge($this->tables[$table][$id], $data, ['id' => $id]);
        return true;
    }

    public function delete(string $table, int $id): bool
    {
        if (!isset($this->tables[$table][$id])) return false;
        unset($this->tables[$table][$id]);
        return true;
    }

    public function find(string $table, array $filters = []): array
    {
        $this->ensureTable($table);
        $rows = array_values($this->tables[$table]);
        if (!$filters) return $rows;
        return array_values(array_filter($rows, function($row) use ($filters) {
            foreach ($filters as $k => $v) {
                if (!array_key_exists($k, $row) || $row[$k] !== $v) return false;
            }
            return true;
        }));
    }

    public function findOne(string $table, array $filters = []): ?array
    {
        $rows = $this->find($table, $filters);
        return $rows[0] ?? null;
    }

    private function ensureTable(string $table): void
    {
        if (!isset($this->tables[$table])) { $this->tables[$table] = []; $this->seq[$table] = 0; }
    }
}
