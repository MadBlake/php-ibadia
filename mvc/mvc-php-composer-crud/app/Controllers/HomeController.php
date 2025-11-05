<?php
namespace App\Controllers;
use Core\Controller;
use Core\Validator;
use App\Models\Post;

class HomeController extends Controller {
    public function index(): void {
        $posts = Post::all();
        $flash = $this->request->takeFlash();
        $this->view('home.index', ['title' => 'Posts', 'posts' => $posts, 'flash' => $flash]);
    }

    public function create(): void {
        $this->view('home.form', [
            'title' => 'Crear post',
            'csrf'  => $this->request->csrfToken(),
            'old'   => $this->request->old(),
            'errors'=> $_SESSION['_errors'] ?? []
        ]);
        unset($_SESSION['_errors']);
    }

    public function store(): void {
        $data = ['title' => trim((string)$this->request->input('title')), 'body' => trim((string)$this->request->input('body'))];
        if (!$this->request->validateCsrf((string)$this->request->input('_csrf'))) { $this->response->status(419)->send('CSRF inválido'); return; }
        $errors = Validator::make($data, ['title' => 'required|min:3|max:150', 'body' => 'required|min:5']);
        if ($errors) {
            $_SESSION['_errors'] = $errors;
            $this->request->flashOld($data);
            $this->response->redirect('/posts/create');
        } else {
            $id = Post::create($data);
            $this->request->flash('success', 'Post creado correctamente.');
            $this->response->redirect('/');
        }
    }

    public function edit(string $id): void {
        $post = Post::find((int)$id);
        if (!$post) { $this->response->status(404)->send('No encontrado'); return; }
        $this->view('home.form', [
            'title' => 'Editar post',
            'csrf'  => $this->request->csrfToken(),
            'post'  => $post,
            'old'   => $this->request->old(),
            'errors'=> $_SESSION['_errors'] ?? []
        ]);
        unset($_SESSION['_errors']);
    }

    public function update(string $id): void {
        if (!$this->request->validateCsrf((string)$this->request->input('_csrf'))) { $this->response->status(419)->send('CSRF inválido'); return; }
        $data = ['title' => trim((string)$this->request->input('title')), 'body' => trim((string)$this->request->input('body'))];
        $errors = Validator::make($data, ['title' => 'required|min:3|max:150', 'body' => 'required|min:5']);
        if ($errors) {
            $_SESSION['_errors'] = $errors;
            $this->request->flashOld($data);
            $this->response->redirect('/posts/{id}' + '/edit'); // placeholder not used in PHP; we'll redirect below
        }
        Post::updateById((int)$id, $data);
        $this->request->flash('success', 'Post actualizado.');
        $this->response->redirect('/');
    }

    public function destroy(string $id): void {
        if (!$this->request->validateCsrf((string)$this->request->input('_csrf'))) { $this->response->status(419)->send('CSRF inválido'); return; }
        Post::deleteById((int)$id);
        $this->request->flash('success', 'Post eliminado.');
        $this->response->redirect('/');
    }

    public function show(string $id): void {
        $post = Post::find((int)$id);
        if (!$post) { $this->response->status(404)->send('No encontrado'); return; }
        $this->view('home.show', ['title'=>"Post #{$id}", 'post'=>$post]);
    }
}
