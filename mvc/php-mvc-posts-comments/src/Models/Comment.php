<?php
namespace App\Models;

use App\Core\Store;

final class Comment
{
    private $db;
    public function __construct() { $this->db = Store::get(); }

    public function forPost(int $postId): array
    {
        return $this->db->find('comments', ['post_id' => $postId]);
    }

    public function create(int $postId, array $data): int
    {
        return $this->db->insert('comments', [
            'post_id' => $postId,
            'author'  => $data['author'] ?? 'Anon',
            'text'    => $data['text'] ?? '',
        ]);
    }

    public function delete(int $id): bool
    {
        return $this->db->delete('comments', $id);
    }
}
