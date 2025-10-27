<?php
namespace App\Contracts;

interface RepositoryInterface
{
    public function find(int $id): ?object;
    public function save(object $entity): void;
}
