# Mini MVC PHP — CRUD + Validación
**Stack:** Composer + Twig

## Rutas
- GET `/`          → listado de posts
- GET `/posts/create` → formulario crear
- POST `/posts`       → guardar
- GET `/posts/{id}`   → detalle
- GET `/posts/{id}/edit`   → formulario editar
- POST `/posts/{id}/update` → actualizar
- POST `/posts/{id}/delete` → eliminar

## Validaciones
- `title`: required, 3–150
- `body`: required, min 5
- **CSRF** con token en sesión, **flash** de mensajes y valores previos.

## Ejecutar
### Servidor embebido
```bash
php -S localhost:8000 -t public
```
### Si usas Composer
```bash
composer install
php -S localhost:8000 -t public
```
