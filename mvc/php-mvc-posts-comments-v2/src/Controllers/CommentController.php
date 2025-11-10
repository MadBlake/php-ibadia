<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Http\Response;
use App\Core\Validation\Validator;
use App\Models\Comment;

final class CommentController extends Controller
{
    private Comment $comments;
    public function __construct() { $this->comments = new Comment(); }

    public function store(int $postId): Response
    {
        $v = Validator::validate($_POST, [
            'author' => 'required|string|min:1|max:100',
            'text'   => 'required|string|min:1',
        ]);
        if (!$v['valid']) {
            return Response::json(['errors' => $v['errors']], 422);
        }
        $this->comments->create($postId, $v['data']);
        return $this->redirect('/posts/' . $postId);
    }

    public function destroy(int $id): Response
    {
        $this->comments->delete($id);
        return $this->redirect('/posts');
    }
}
