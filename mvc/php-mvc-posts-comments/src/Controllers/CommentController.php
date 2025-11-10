<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Comment;

final class CommentController extends Controller
{
    private Comment $comments;
    public function __construct() { $this->comments = new Comment(); }

    public function store(int $postId): string
    {
        $this->comments->create($postId, $_POST);
        return $this->redirect('/posts/' . $postId);
    }

    public function destroy(int $id): string
    {
        // No sabemos el post_id aquí fácilmente (podríamos buscarlo). Para simplificar, vuelve al listado.
        $this->comments->delete($id);
        return $this->redirect('/posts');
    }
}
