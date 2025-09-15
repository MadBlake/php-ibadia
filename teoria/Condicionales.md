En PHP, la estructura de control `if` se utiliza para tomar decisiones en función de si una condición es verdadera o falsa. Esto permite que tu programa ejecute cierto bloque de código solo cuando se cumple una condición específica. 

## IF

La sintaxis básica de la declaración `if` es la siguiente:

``` php 
if (condición) {
    // Código a ejecutar si la condición es verdadera
}
```

1. La línea comienza con la palabra clave `"if"`, seguida de un paréntesis de apertura `(`.
2. Dentro de los paréntesis, colocas una expresión que se evaluará. Si esta expresión se evalúa como `true`, se ejecutará el bloque de código dentro de las llaves `{}`.
3. Luego del paréntesis de cierre `)`, coloca el bloque de código que deseas ejecutar si la condición es verdadera. Este bloque de código puede contener una o varias instrucciones.
4. Finaliza el bloque de código con una llave de cierre `}`.

``` php
$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.";
}
```

En PHP, también, existe una sintaxis alternativa para el cierre de las estructuras de control, incluyendo `if`, que utiliza `endif`. Esta forma alternativa permite estructurar de manera más clara y legible el código cuando se mezcla con HTML, especialmente en plantillas o vistas.

``` php
$edad = 20;
if ($edad >= 18):
    echo "Eres mayor de edad.";
else:
    echo "Eres menor de edad.";
endif;
```

Ejemplo en con Html:

``` php
<?php
$edad = 15;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <?php if ($edad >= 18): ?>
        <p>Eres mayor de edad.</p>
    <?php else: ?>
        <p>Eres menor de edad.</p>
    <?php endif; ?>
</body>
</html>
```



También existen dos sintaxis alternativas que pueden ser utiles en diferentes situaciones.

1.  **Operador ternario (`?`) :**

El operador ternario es una forma concisa de expresar una estructura `if` en una sola línea. Se compone de tres partes: una condición, un valor si la condición es verdadera y un valor si la condición es falsa.

``` php 
$edad = 20;
$mensaje = ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";
echo $mensaje;
```

2.  **Operador null coalescing (`??`):** 

El operador null coalescing se utiliza para proporcionar un valor predeterminado si una variable es nula.

``` php 
$nombre = $_GET['nombre'] ?? "Invitado";
echo "Hola, $nombre";
```

También puedes utilizar `elseif` para evaluar múltiples condiciones:

```php
$nota = 80;

if ($nota >= 90) {
    echo "Tienes una A.";
} elseif ($nota >= 80) {
    echo "Tienes una B.";
} else {
    echo "Tienes una C o menos.";
}
```

## **`switch`:** 
La estructura `switch` se utiliza cuando deseas comparar una variable con múltiples valores posibles y ejecutar diferentes bloques de código según el valor.

```php
$diaSemana = "jueves";

switch ($diaSemana) {
    case "lunes":
        echo "Es el primer día de la semana.";
        break;
    case "martes":
        echo "Es el segundo día de la semana.";
        break;
    case "miércoles":
        echo "Es el tercer día de la semana.";
        break;
    default:
        echo "Es un día cualquiera.";
}
```

## Control de datos

A traves de los [[Condicionales]] tambien podemos comprobar los diferentes [[Tipos de datos en php]] ,  esto nos sirve ya que PHP es un lenguaje no tipado, también llamado "tipado débil". Es decir, PHP nos permite guardar cualquier tipo de dato en cualquier variable sin tener que declarar de manera explicita, el tipo de dato que vamos a guardar. Por lo tanto en el momento en el que tengamos que acceder a una variable para poder usarla, es importante comprobar que el tipo de dato es correcto ya que si no lo hacemos, es posible que nos de errores o haga cosas que no esperamos.

## **`is_int()`**: 
Comprueba si una variable es de tipo entero (integer).

``` php
$numero = 5;
if (is_int($numero)) {
	echo "Es un número entero";
} else {
	echo "No es un número entero";
}
```

## **`is_float()`**: 
Comprueba si una variable es de tipo flotante (float).

```php
$decimal = 3.14;
if (is_float($decimal)) {
    echo "Es un número con decimales";
} else {
    echo "No es un número con decimales";
}
```

## **`is_string()`**: 
Comprueba si una variable es de tipo cadena de texto (string).

```php
$nombre = "Juan";
if (is_string($nombre)) {
	echo "Es una cadena de texto";
} else {
    echo "NO es una cadena de texto";
}
```

## **`is_bool()`**: 
Comprueba si una variable es de tipo booleano (boolean).

```php
$verdadero = true;
if (is_bool($verdadero)) {
    echo "Es un booleano";
} else {
    echo "No es un booleano";
}
```

## **`is_array()`**: 
Comprueba si una variable es de tipo array.

```php
$miArray = [1, 2, 3];
if (is_array($miArray)) {
    echo "Es una array";
} else {
    echo "No es una array";
}
```

## **`is_null()`**: 
Comprueba si una variable es nula.

```php
$variable = null;
if (is_null($variable)) {
    echo "La variable es null";
} else {
    echo "La variable NO es null";
}
```


## **`isset()`**:

La función `isset()` en PHP se utiliza para comprobar si una variable está definida y tiene un valor distinto de `null`. Esta función es útil para verificar si una variable ha sido inicializada y tiene un valor asignado antes de intentar utilizarla en operaciones posteriores.

```php
//$nombre = "Juan";

if (isset($nombre)) {
    echo "El nombre es: " . $nombre;
} else {
    echo "La variable no está definida o es nula.";
}
```

Si utilizas `isset()` en una variable que no ha sido definida previamente, la función te ayudará a evitar errores:

```php
if (isset($_GET['edad'])) {
	echo "La edad es: " . $_GET['edad'];
} else {
	echo "La variable no está definida o es nula.";
}
```