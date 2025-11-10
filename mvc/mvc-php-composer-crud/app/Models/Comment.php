<?php

namespace App\Models;

use App\Models\CommentRepositoryInterface;

class Comment extends BaseModel implements CommentRepositoryInterface
{
    static protected array $memoryComments = [
        array(
            "id" => 1,
            "post_id" => 1,
            "author" => "John Doe",
            "title" => "First Comment",
            "body" => "This is a comment.",
            "created_at" => "2024-01-01 12:00:00",
            "updated_at" => "2024-01-01 12:00:00"
        ),
        array(
            "id" => 2,
            "post_id" => 1,
            "author" => "Jane Smith",
            "title" => "Second Comment",
            "body" => "This is another comment.",
            "created_at" => "2024-01-02 13:30:00",
            "updated_at" => "2024-01-02 13:30:00"
        ),
    ];

    public static function find(int $id): ?array
    {
        /*if (static::$useMemoryStorage) {
            $filtered = array_filter(
                self::$memoryComments,
                fn($comment) => $comment['id'] === $id
            );
            return empty($filtered) ? null : reset($filtered);
        }

        $stmt = self::pdo()->prepare('SELECT * FROM comments WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;*/
    }
    public static function create(array $data): int
    {
        if (static::$useMemoryStorage) {
            $newId = empty(self::$memoryComments) ? 1 :
                max(array_column(self::$memoryComments, 'id')) + 1;

            $now = date('Y-m-d H:i:s');
            $comment = [
                'id' => $newId,
                'post_id' => $data['post_id'],
                'author' => $data['author'],
                'title' => $data['title'],
                'body' => $data['body'],
                'created_at' => $now,
                'updated_at' => $now
            ];

            self::$memoryComments[] = $comment;
            return $newId;
        }

        $stmt = self::pdo()->prepare('INSERT INTO comments (post_id, author, title, body) VALUES (?, ?, ?, ?)');
        $stmt->execute([$data['post_id'], $data['author'], $data['title'], $data['body']]);
        return (int)self::pdo()->lastInsertId();
    }

    public static function updateById(int $id, array $data): bool
    {
        if (static::$useMemoryStorage) {
            foreach (self::$memoryComments as $key => $comment) {
                if ($comment['id'] === $id) {
                    self::$memoryComments[$key] = [
                        ...self::$memoryComments[$key],
                        'author' => $data['author'],
                        'title' => $data['title'],
                        'body' => $data['body'],
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    return true;
                }
            }
            return false;
        }

        $stmt = self::pdo()->prepare('UPDATE comments SET author = ?, title = ?, body = ? WHERE id = ?');
        return $stmt->execute([$data['author'], $data['title'], $data['body'], $id]);
    }

    public static function deleteById(int $id): bool
    {
        if (static::$useMemoryStorage) {
            $initialCount = count(self::$memoryComments);
            self::$memoryComments = array_filter(
                self::$memoryComments,
                fn($comment) => $comment['id'] !== $id
            );
            return count(self::$memoryComments) < $initialCount;
        }

        $stmt = self::pdo()->prepare('DELETE FROM comments WHERE id = ?');
        return $stmt->execute([$id]);
    }

    public static function findByPostId(int $postId): array
    {
        if (static::$useMemoryStorage) {
            return array_filter(
                self::$memoryComments,
                fn($comment) => $comment['post_id'] === $postId
            );
        }

        $stmt = self::pdo()->prepare('SELECT * FROM comments WHERE post_id = ? ORDER BY id ASC');
        $stmt->execute([$postId]);
        return $stmt->fetchAll();
    }
}
