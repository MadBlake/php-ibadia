# Design Patterns (PHP) — Implementaciones originales

Repositorio con **implementaciones originales en PHP 8+** de los patrones GoF, inspirado por el contenido del PDF de DesignPatternsPHP (Read the Docs, ES).
> *No copia código literal del PDF; el propósito es didáctico.*

## Contenido
- `src/` código de cada patrón con **namespaces PSR-4**
- `examples/` ejemplos ejecutables por patrón
- `scripts/run_all.sh` para ejecutar todos los ejemplos
- `composer.json` con autoload PSR-4

## Requisitos
- PHP 8.1 o superior
- Opcional: Composer

## Uso rápido
```bash
composer dump-autoload
php examples/abstract-factory/main.php
# o ejecuta todos:
bash scripts/run_all.sh
```

## Atribución
Conceptos y estructura inspirados en el PDF de DesignPatternsPHP (ES). Créditos a sus autores y colaboradores.
