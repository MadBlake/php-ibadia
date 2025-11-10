<?php
use App\Controllers\HomeController;
use App\Controllers\PostController;
use App\Controllers\CommentController;
use App\Core\Routing\Route;

return [
    Route::get('#^/$#',                        [HomeController::class, 'index']),
    Route::get('#^/posts$#',                   [PostController::class, 'index']),
    Route::get('#^/posts/create$#',            [PostController::class, 'create']),
    Route::post('#^/posts$#',                  [PostController::class, 'store']),
    Route::get('#^/posts/(\d+)$#',            [PostController::class, 'show']),
    Route::get('#^/posts/(\d+)/edit$#',       [PostController::class, 'edit']),
    Route::post('#^/posts/(\d+)/update$#',    [PostController::class, 'update']),
    Route::post('#^/posts/(\d+)/delete$#',    [PostController::class, 'destroy']),

    // Comments
    Route::post('#^/posts/(\d+)/comments$#',  [CommentController::class, 'store']),
    Route::post('#^/comments/(\d+)/delete$#', [CommentController::class, 'destroy']),
];
