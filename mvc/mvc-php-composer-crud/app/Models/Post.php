<?php

namespace App\Models;

use App\Models\Storage\StorageInterface;

class Post extends BaseModel
{
    public function __construct(StorageInterface $storage)
    {
        parent::__construct($storage);
    }

    static protected array $memoryPosts = [
        [
            'id' => 1,
            'title' => 'First Post',
            'body' => 'This is our first post content.',
            'created_at' => '2024-01-01 10:00:00',
            'updated_at' => '2024-01-01 10:00:00'
        ],
        [
            'id' => 2,
            'title' => 'Second Post',
            'body' => 'This is another post to demonstrate the in-memory storage.',
            'created_at' => '2024-01-02 15:30:00',
            'updated_at' => '2024-01-02 15:30:00'
        ],
    ];

    public static function all(): array
    {
        return 
    }

    public static function find(int $id): ?array
    {
        if (static::$useMemoryStorage) {
            $filtered = array_filter(
                self::$memoryPosts,
                fn($post) => $post['id'] === $id
            );
            $row = reset($filtered) ?: null;
            return $row;
        }

        $stmt = self::pdo()->prepare('SELECT id, title, body, created_at, updated_at FROM posts WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function create(array $data): int
    {
        if (static::$useMemoryStorage) {
            $newId = empty(self::$memoryPosts) ? 1 :
                max(array_column(self::$memoryPosts, 'id')) + 1;

            $now = date('Y-m-d H:i:s');
            $post = [
                'id' => $newId,
                'title' => $data['title'],
                'body' => $data['body'],
                'created_at' => $now,
                'updated_at' => $now
            ];

            self::$memoryPosts[] = $post;
            return $newId;
        }

        $stmt = self::pdo()->prepare('INSERT INTO posts (title, body) VALUES (?, ?)');
        $stmt->execute([$data['title'], $data['body']]);
        return (int)self::pdo()->lastInsertId();
    }

    public static function updateById(int $id, array $data): bool
    {
        if (static::$useMemoryStorage) {
            foreach (self::$memoryPosts as $key => $post) {
                if ($post['id'] === $id) {
                    self::$memoryPosts[$key] = [
                        ...self::$memoryPosts[$key],
                        'title' => $data['title'],
                        'body' => $data['body'],
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    return true;
                }
            }
            return false;
        }

        $stmt = self::pdo()->prepare('UPDATE posts SET title = ?, body = ? WHERE id = ?');
        return $stmt->execute([$data['title'], $data['body'], $id]);
    }

    public static function deleteById(int $id): bool
    {
        if (static::$useMemoryStorage) {
            $initialCount = count(self::$memoryPosts);
            self::$memoryPosts = array_filter(
                self::$memoryPosts,
                fn($post) => $post['id'] !== $id
            );
            return count(self::$memoryPosts) < $initialCount;
        }

        $stmt = self::pdo()->prepare('DELETE FROM posts WHERE id = ?');
        return $stmt->execute([$id]);
    }
}