<?php
namespace App\Models;

use App\Core\Store;

final class Post
{
    private $db;
    public function __construct() { $this->db = Store::get(); }

    public function all(): array { return $this->db->find('posts'); }
    public function find(int $id): ?array { return $this->db->findOne('posts', ['id' => $id]); }

    public function create(array $data): int
    {
        return $this->db->insert('posts', [
            'title' => $data['title'] ?? '',
            'body'  => $data['body'] ?? '',
        ]);
    }

    public function update(int $id, array $data): bool
    {
        return $this->db->update('posts', $id, [
            'title' => $data['title'] ?? '',
            'body'  => $data['body'] ?? '',
        ]);
    }

    public function delete(int $id): bool
    {
        // borra comentarios asociados primero (simplemente por integridad)
        $comments = $this->db->find('comments', ['post_id' => $id]);
        foreach ($comments as $c) $this->db->delete('comments', (int)$c['id']);
        return $this->db->delete('posts', $id);
    }
}
