# Mini MVC (Composer) — Posts & Comentarios

Pequeño MVC en PHP 8 con Composer, con capa de almacenamiento intercambiable:
- `ArrayStorage` (en memoria, ideal para demos/tests)
- `PdoStorage` (MySQL con PDO)

## Requisitos
- PHP 8.0+
- Composer
- (Opcional) MySQL si usas driver `mysql`

## Instalación
```bash
composer install
# Copia el .htaccess para Apache (si lo necesitas)
cp public/.htaccess.example public/.htaccess
php -S localhost:8000 -t public
```

Visita: http://localhost:8000

## Configuración
Edita `config/db.php`:

```php
'driver' => 'array' // o 'mysql'
```

Para MySQL, crea tablas:

```sql
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  body TEXT NOT NULL
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  post_id INT NOT NULL,
  author VARCHAR(100) NOT NULL,
  text TEXT NOT NULL,
  CONSTRAINT fk_post FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
);
```

## Rutas
- `GET /` — Home
- `GET /posts` — Listado de posts
- `GET /posts/create` — Form crear post
- `POST /posts` — Guardar post
- `GET /posts/{id}` — Ver post + comentarios
- `GET /posts/{id}/edit` — Editar post
- `POST /posts/{id}/update` — Actualizar post
- `POST /posts/{id}/delete` — Eliminar post
- `POST /posts/{id}/comments` — Crear comentario
- `POST /comments/{id}/delete` — Eliminar comentario
