<?php
return [
    // Cambia a 'mysql' para BBDD real
    'driver'   => 'array',

    // Datos iniciales si usas 'array'
    'seed' => [
        'posts' => [
            ['title' => 'Primer Post', 'body' => 'Contenido de ejemplo'],
            ['title' => 'Segundo Post', 'body' => 'Otro contenido'],
        ],
        'comments' => [
            ['post_id' => 1, 'author' => 'Ana', 'text' => '¡Muy bueno!'],
            ['post_id' => 1, 'author' => 'Luis', 'text' => 'Gracias por compartir'],
            ['post_id' => 2, 'author' => 'Marta', 'text' => 'Interesante'],
        ],
    ],

    // Config para MySQL
    'host'     => '127.0.0.1',
    'dbname'   => 'mvcdb',
    'user'     => 'root',
    'password' => '',
    'charset'  => 'utf8mb4',
];
