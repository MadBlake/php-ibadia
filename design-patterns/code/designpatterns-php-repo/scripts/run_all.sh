#!/usr/bin/env bash
set -euo pipefail
composer dump-autoload >/dev/null 2>&1 || true

for d in examples/*; do
  if [ -f "$d/main.php" ]; then
    echo ">> Running $d"
    php "$d/main.php" || exit 1
  fi
done

echo "All examples executed successfully."
