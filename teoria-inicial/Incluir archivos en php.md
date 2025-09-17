`include` y `require` son dos funciones en PHP que se utilizan para incorporar (cargar) contenido de otros archivos en un script. Estas funciones son especialmente útiles cuando deseas reutilizar código o dividir tu código en archivos más pequeños y manejables. Ambos constructos funcionan de manera similar, pero tienen diferencias clave en cómo manejan los errores.

## **include:**

La función `include` se utiliza para incluir contenido de otro archivo en el script actual. Si el archivo no se encuentra o contiene errores, PHP generará una advertencia, pero el script continuará ejecutándose.

### Sintaxis:

```php
include "archivo.php";
```

### Ejemplo:

Supongamos que tienes un archivo llamado "funciones.php" que contiene funciones útiles:

```php
// funciones.php
function saludar() {
    echo "¡Hola!";
}
```

Puedes incluir y utilizar estas funciones en otro archivo:

```php
// index.php
include "funciones.php";

saludar(); // Esto imprimirá "¡Hola!"
```

## **require:**

La función `require` también se utiliza para incluir contenido de otro archivo en el script actual. Sin embargo, si el archivo no se encuentra o contiene errores, PHP generará un error fatal y detendrá la ejecución del script.

### Sintaxis:

```php
require "archivo.php";
```

### Ejemplo:

Supongamos que tienes un archivo llamado "config.php" que contiene información de configuración:

```php
// config.php
$baseDatos = "mi_bd";
$usuario = "usuario";
```

Puedes requerir este archivo para utilizar las variables en otro script:

```php
// conexion.php
require "config.php";

echo "Conectándose a la base de datos: $baseDatos, usuario: $usuario";
```

## include_once y require_once

Existe una versión de include y require con el sufijo "`_once`". Las diferencias entre `require`/`include` y `require_once`/`include_once` radican en cómo manejan la inclusión de archivos y la prevención de múltiples inclusiones del mismo archivo.

1. **`require` y `include`:** Estas funciones se utilizan para incluir contenido de otros archivos en el script actual. Si se encuentran errores en el archivo incluido, se generarán advertencias (`include`) o errores fatales (`require`), y el script continuará su ejecución. Si incluyes el mismo archivo múltiples veces, PHP lo hará sin problema, lo que podría resultar en definiciones duplicadas y comportamientos inesperados.

2. **`require_once` y `include_once`:** Estos constructos también se utilizan para incluir contenido de otros archivos, pero tienen una diferencia crucial: garantizan que un archivo solo se incluya una vez en el script, independientemente de cuántas veces se invoque el mismo constructo. Si el archivo ya ha sido incluido, PHP lo ignorará y no volverá a cargarlo.