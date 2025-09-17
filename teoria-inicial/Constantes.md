# Constantes

En PHP, las constantes son valores que no pueden ser modificados una vez que se les ha asignado un valor inicial. Proporcionan una forma de definir valores fijos y predecibles en tu código que no cambian durante la ejecución del script.

## Sintaxis de definición de constantes

Para definir una constante en PHP, se utiliza la función `define()` o, a partir de PHP 7, también se puede utilizar la palabra clave `const`. La sintaxis es la siguiente:

Utilizando `define()`:

``` php
define('NOMBRE_CONSTANTE', valor);
```

Utilizando `const`:

``` php
const NOMBRE_CONSTANTE = valor;
```

Es importante destacar que los nombres de las constantes se recomienda que estén en mayúsculas por convención, aunque PHP no es sensible a mayúsculas y minúsculas en los nombres de las constantes.

## Acceso a una constante

Una vez definida, puedes acceder a una constante utilizando simplemente su nombre sin el signo de dólar (`$`). Las constantes son globales por defecto y se pueden acceder desde cualquier parte del script.

## Ejemplo de uso de constantes

En este ejemplo, se definen dos constantes: `PI` con un valor de 3.14159 y `SALUDO` con un valor de "¡Hola, mundo!". Luego, se puede acceder a estas constantes directamente utilizando su nombre.

``` php
define('PI', 3.14159);
const SALUDO = "¡Hola, mundo!";

echo PI;        // Imprime: 3.14159
echo SALUDO;    // Imprime: ¡Hola, mundo!

```

## Constantes predefinidas

PHP también proporciona una serie de constantes predefinidas que están disponibles en todos los scripts. Algunas de estas constantes predefinidas son `PHP_VERSION`, `PHP_OS`, `PHP_INT_MAX`, entre otras. Puedes consultar la documentación oficial de PHP para obtener la lista completa de constantes predefinidas.

```php
const PI = 3.141592;
echo PI;

echo PHP_VERSION.'</br>'; // Imprime la versión de PHP instalada
echo PHP_OS.'</br>'; // Imprime el nombre del sistema operativo en el que se está ejecutando PHP
echo PHP_INT_MAX.'</br>'; // Imprime el valor máximo de un entero en la plataforma actual
echo __FILE__.'</br>'; // Imprime la ruta y nombre del archivo actual
echo __LINE__.'</br>'; // Imprime el número de línea actual en el archivo
echo DIRECTORY_SEPARATOR.'</br>'; // Imprime el separador de directorio utilizado en la plataforma actual (p.ej., "/" en Unix, "\" en Windows)

// Ejemplo de uso de una constante mágica en una función
function mostrarNombreArchivo()
{
	echo __FUNCTION__.'</br>'; // Imprime el nombre de la función actual
}

mostrarNombreArchivo(); // Imprime el nombre de la función: mostrarNombreArchivo
```

