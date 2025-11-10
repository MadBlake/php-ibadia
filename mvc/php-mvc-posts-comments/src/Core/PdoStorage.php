<?php
namespace App\Core;

use PDO;

final class PdoStorage implements Storage
{
    public function __construct(private PDO $pdo) {}

    public function insert(string $table, array $data): int
    {
        $cols = array_keys($data);
        $place = array_map(fn($c) => ':' . $c, $cols);
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
            $this->q($table), implode(',', array_map([$this,'q'], $cols)), implode(',', $place)
        );
        $stmt = $this->pdo->prepare($sql);
        foreach ($data as $k => $v) $stmt->bindValue(':' . $k, $v);
        $stmt->execute();
        return (int) $this->pdo->lastInsertId();
    }

    public function update(string $table, int $id, array $data): bool
    {
        if (!$data) return true;
        $sets = [];
        foreach ($data as $k => $_) $sets[] = $this->q($k) . " = :" . $k;
        $sql = sprintf('UPDATE %s SET %s WHERE id = :__id__', $this->q($table), implode(',', $sets));
        $stmt = $this->pdo->prepare($sql);
        foreach ($data as $k => $v) $stmt->bindValue(':' . $k, $v);
        $stmt->bindValue(':__id__', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete(string $table, int $id): bool
    {
        $sql = sprintf('DELETE FROM %s WHERE id = :__id__', $this->q($table));
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':__id__', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function find(string $table, array $filters = []): array
    {
        [$where, $params] = $this->where($filters);
        $sql = sprintf('SELECT * FROM %s%s ORDER BY id DESC', $this->q($table), $where);
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }

    public function findOne(string $table, array $filters = []): ?array
    {
        [$where, $params] = $this->where($filters);
        $sql = sprintf('SELECT * FROM %s%s LIMIT 1', $this->q($table), $where);
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    private function where(array $filters): array
    {
        if (!$filters) return ['', []];
        $clauses = [];
        $params = [];
        foreach ($filters as $k => $v) {
            $p = ':w_' . $k;
            $clauses[] = $this->q($k) . " = $p";
            $params[$p] = $v;
        }
        return [' WHERE ' . implode(' AND ', $clauses), $params];
    }

    private function q(string $ident): string
    {
        return '`' . str_replace('`', '``', $ident) . '`';
    }
}
