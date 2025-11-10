<h2>Posts</h2>

<p><a href="/posts/create">Crear nuevo</a></p>

<table role="grid">
  <thead>
    <tr><th>ID</th><th>Título</th><th>Acciones</th></tr>
  </thead>
  <tbody>
  <?php foreach ($posts as $p): ?>
    <tr>
      <td><?= htmlspecialchars($p['id']) ?></td>
      <td><a href="/posts/<?= $p['id'] ?>"><?= htmlspecialchars($p['title']) ?></a></td>
      <td>
        <a href="/posts/<?= $p['id'] ?>/edit">Editar</a>
        <form action="/posts/<?= $p['id'] ?>/delete" method="post" style="display:inline" onsubmit="return confirm('¿Eliminar?');">
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
