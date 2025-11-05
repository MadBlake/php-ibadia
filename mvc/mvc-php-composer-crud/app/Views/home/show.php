<?php
?>
<h1>#<?= (int)$post['id'] ?> — <?= htmlspecialchars($post['title']) ?></h1>
<p><?= nl2br(htmlspecialchars($post['body'])) ?></p>
<p><a href="/">← Volver</a></p>
