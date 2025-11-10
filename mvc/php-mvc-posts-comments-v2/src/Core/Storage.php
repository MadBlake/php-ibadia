<?php
namespace App\Core;

interface Storage
{
    public function insert(string $table, array $data): int;
    public function update(string $table, int $id, array $data): bool;
    public function delete(string $table, int $id): bool;
    public function find(string $table, array $filters = []): array;
    public function findOne(string $table, array $filters = []): ?array;
}
