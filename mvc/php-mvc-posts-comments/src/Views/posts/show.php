<h2><?= htmlspecialchars($post['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($post['body'])) ?></p>

<hr>
<h3>Comentarios</h3>

<?php if (!$comments): ?>
  <p class="muted">Sin comentarios aún.</p>
<?php endif; ?>

<ol>
<?php foreach ($comments as $c): ?>
  <li>
    <strong><?= htmlspecialchars($c['author']) ?>:</strong>
    <?= nl2br(htmlspecialchars($c['text'])) ?>
    <form action="/comments/<?= $c['id'] ?>/delete" method="post" style="display:inline" onsubmit="return confirm('¿Eliminar comentario?');">
      <button type="submit" class="secondary">Eliminar</button>
    </form>
  </li>
<?php endforeach; ?>
</ol>

<h4>Añadir comentario</h4>
<form action="/posts/<?= $post['id'] ?>/comments" method="post">
  <label>Autor
    <input type="text" name="author" placeholder="Tu nombre">
  </label>
  <label>Comentario
    <textarea name="text" rows="3" required></textarea>
  </label>
  <button type="submit">Publicar</button>
</form>
