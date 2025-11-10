<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini MVC - Posts & Comentarios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
  <style>
    main { max-width: 900px; margin: 2rem auto; }
    .muted { color: #666; font-size: .9rem; }
  </style>
</head>
<body>
  <main>
    <nav>
      <ul>
        <li><strong><a href="/">Mini MVC</a></strong></li>
      </ul>
      <ul>
        <li><a href="/posts">Posts</a></li>
        <li><a href="/posts/create">Nuevo Post</a></li>
      </ul>
    </nav>
    <hr>
    <?= $content ?>
  </main>
</body>
</html>
