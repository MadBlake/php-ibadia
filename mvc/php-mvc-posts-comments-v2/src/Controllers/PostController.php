<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Http\Request;
use App\Core\Http\Response;
use App\Core\Validation\Validator;
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

    public function index(): Response
    {
        $posts = $this->posts->all();
        return $this->view('posts/index', compact('posts'));
    }

    public function create(): Response
    {
        return $this->view('posts/create');
    }

    public function store(): Response
    {
        $v = Validator::validate($_POST, [
            'title' => 'required|string|min:3|max:255',
            'body'  => 'required|string|min:3',
        ]);
        if (!$v['valid']) {
            // En un proyecto real, mostrarías errores en la vista
            return Response::json(['errors' => $v['errors']], 422);
        }
        $id = $this->posts->create($v['data']);
        return $this->redirect('/posts/' . $id);
    }

    public function show(int $id): Response
    {
        $post = $this->posts->find($id);
        if (!$post) return Response::html("Post no encontrado", 404);
        $comments = $this->comments->forPost($id);
        return $this->view('posts/show', compact('post','comments'));
    }

    public function edit(int $id): Response
    {
        $post = $this->posts->find($id);
        if (!$post) return Response::html("Post no encontrado", 404);
        return $this->view('posts/edit', compact('post'));
    }

    public function update(int $id): Response
    {
        $v = Validator::validate($_POST, [
            'title' => 'required|string|min:3|max:255',
            'body'  => 'required|string|min:3',
        ]);
        if (!$v['valid']) {
            return Response::json(['errors' => $v['errors']], 422);
        }
        $this->posts->update($id, $v['data']);
        return $this->redirect('/posts/' . $id);
    }

    public function destroy(int $id): Response
    {
        $this->posts->delete($id);
        return $this->redirect('/posts');
    }
}
