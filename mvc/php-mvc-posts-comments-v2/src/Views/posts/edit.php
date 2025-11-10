<h2>Editar Post #<?= htmlspecialchars($post['id']) ?></h2>

<form action="/posts/<?= $post['id'] ?>/update" method="post">
  <label>Título
    <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" required>
  </label>
  <label>Contenido
    <textarea name="body" rows="6" required><?= htmlspecialchars($post['body']) ?></textarea>
  </label>
  <button type="submit">Actualizar</button>
</form>
