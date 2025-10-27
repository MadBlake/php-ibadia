# OOP PHP Demo (2n DAW)

Projecte d'exemple complet per repassar la POO en PHP amb **namespaces** i autoload **PSR-4**.

## Conceptes coberts
- Classes i objectes, encapsulació (getters/setters), mètodes i propietats (visibilitat: public/private/protected)
- **Herència** (`extends`) i **polimorfisme**
- **Interfícies** vs **classes abstractes**
- **Traits** (simulant herència múltiple)
- **Composició i agregació**
- Namespaces (`App\...`) i **autoload** via Composer

## Requisits
- PHP >= 8.1
- Composer (per generar l'autoload)

## Posada en marxa
```bash
composer install
php -S localhost:8000 -t public
```
Obre http://localhost:8000

## Estructura
src/ (Abstracts, Contracts, Controllers, Core, Models, Services, Traits, Utils)
public/index.php
tests/run.php
