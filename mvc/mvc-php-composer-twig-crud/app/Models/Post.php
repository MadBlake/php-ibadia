<?php
namespace App\Models;
class Post extends BaseModel {
    public static function all(): array {
        $stmt = self::pdo()->query('SELECT id, title, body FROM posts ORDER BY id DESC');
        return $stmt->fetchAll();
    }
    public static function find(int $id): ?array {
        $stmt = self::pdo()->prepare('SELECT id, title, body FROM posts WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
    public static function create(array $data): int {
        $stmt = self::pdo()->prepare('INSERT INTO posts (title, body) VALUES (?, ?)');
        $stmt->execute([$data['title'], $data['body']]);
        return (int)self::pdo()->lastInsertId();
    }
    public static function updateById(int $id, array $data): bool {
        $stmt = self::pdo()->prepare('UPDATE posts SET title = ?, body = ? WHERE id = ?');
        return $stmt->execute([$data['title'], $data['body'], $id]);
    }
    public static function deleteById(int $id): bool {
        $stmt = self::pdo()->prepare('DELETE FROM posts WHERE id = ?');
        return $stmt->execute([$id]);
    }
}
