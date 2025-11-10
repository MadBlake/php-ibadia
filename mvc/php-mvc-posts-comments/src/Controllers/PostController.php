<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;
use App\Models\Comment;

final class PostController extends Controller
{
    private Post $posts;
    private Comment $comments;

    public function __construct()
    {
        $this->posts = new Post();
        $this->comments = new Comment();
    }

    public function index(): string
    {
        $posts = $this->posts->all();
        return $this->view('posts/index', compact('posts'));
    }

    public function create(): string
    {
        return $this->view('posts/create');
    }

    public function store(): string
    {
        $id = $this->posts->create($_POST);
        return $this->redirect('/posts/' . $id);
    }

    public function show(int $id): string
    {
        $post = $this->posts->find($id);
        if (!$post) { http_response_code(404); return "Post no encontrado"; }
        $comments = $this->comments->forPost($id);
        return $this->view('posts/show', compact('post','comments'));
    }

    public function edit(int $id): string
    {
        $post = $this->posts->find($id);
        if (!$post) { http_response_code(404); return "Post no encontrado"; }
        return $this->view('posts/edit', compact('post'));
    }

    public function update(int $id): string
    {
        $this->posts->update($id, $_POST);
        return $this->redirect('/posts/' . $id);
    }

    public function destroy(int $id): string
    {
        $this->posts->delete($id);
        return $this->redirect('/posts');
    }
}
