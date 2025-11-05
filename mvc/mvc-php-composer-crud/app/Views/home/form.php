<?php
$v = $old ?? [];
if (!empty($post)) { $v = $post; }
?>
<h1><?= htmlspecialchars($title ?? '') ?></h1>
<form method="post" action="<?= !empty($post) ? '/posts/'.(int)$post['id'].'/update' : '/posts' ?>">
  <input type="hidden" name="_csrf" value="<?= htmlspecialchars($csrf ?? '') ?>">
  <div>
    <label>Título</label><br>
    <input name="title" value="<?= htmlspecialchars($v['title'] ?? '') ?>" maxlength="150">
    <?php if (!empty($errors['title'])): ?><div class="error"><?= htmlspecialchars(implode(', ', $errors['title'])) ?></div><?php endif; ?>
  </div>
  <div>
    <label>Contenido</label><br>
    <textarea name="body" rows="6"><?= htmlspecialchars($v['body'] ?? '') ?></textarea>
    <?php if (!empty($errors['body'])): ?><div class="error"><?= htmlspecialchars(implode(', ', $errors['body'])) ?></div><?php endif; ?>
  </div>
  <button type="submit"><?= !empty($post) ? 'Actualizar' : 'Crear' ?></button>
</form>
