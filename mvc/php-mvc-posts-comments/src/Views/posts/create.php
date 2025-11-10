<h2>Nuevo Post</h2>

<form action="/posts" method="post">
  <label>Título
    <input type="text" name="title" required>
  </label>
  <label>Contenido
    <textarea name="body" rows="6" required></textarea>
  </label>
  <button type="submit">Guardar</button>
</form>
