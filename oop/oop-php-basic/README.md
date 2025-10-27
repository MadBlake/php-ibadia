# OOP PHP Basic (2n DAW)

Versió **bàsica** del projecte de POO en PHP **sense MVC** (sense controladors ni serveis). Inclou:
- **Namespaces** `App\...` i **autoload PSR-4**
- **Interfícies** vs **classes abstractes**
- **Traits** per simular herència múltiple
- **Composició i agregació**
- **Tests reals amb PHPUnit**

## Requisits
- PHP >= 8.1
- Composer

## Executar exemples bàsics
```bash
composer install
php -S localhost:8000 -t public
```
- Obre `http://localhost:8000`
- Prova també `/animals.php` i `/users.php`

## Executar tests
```bash
vendor/bin/phpunit
# o bé
vendor/bin/phpunit --testsuite Unit
```

## Estructura
- `src/` → Classes del domini (Models, Abstracts, Traits, Contracts, Utils)
- `public/` → Scripts PHP **bàsics** que instancien i mostren resultats
- `tests/Unit/` → Tests de PHPUnit
