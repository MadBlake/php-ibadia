<?php
use App\Controllers\HomeController;
use App\Controllers\PostController;
use App\Controllers\CommentController;

return [
    ['GET',  '#^/$#',                        [HomeController::class, 'index']],
    ['GET',  '#^/posts$#',                   [PostController::class, 'index']],
    ['GET',  '#^/posts/create$#',            [PostController::class, 'create']],
    ['POST', '#^/posts$#',                   [PostController::class, 'store']],
    ['GET',  '#^/posts/(\d+)$#',            [PostController::class, 'show']],
    ['GET',  '#^/posts/(\d+)/edit$#',       [PostController::class, 'edit']],
    ['POST', '#^/posts/(\d+)/update$#',     [PostController::class, 'update']],
    ['POST', '#^/posts/(\d+)/delete$#',     [PostController::class, 'destroy']],

    // Comments
    ['POST', '#^/posts/(\d+)/comments$#',   [CommentController::class, 'store']],
    ['POST', '#^/comments/(\d+)/delete$#',  [CommentController::class, 'destroy']],
];
