# Global 

La declaración de una variable como global usando la palabra clave `global` tiene efecto dentro del ámbito donde se realiza la declaración y sus subámbitos. Una vez que se ha declarado una variable como global, se mantendrá global en todo el script.

Por lo tanto, si en algún punto del código declaras una variable como global utilizando `global $numero;`, esa variable se mantendrá global a partir de ese punto en adelante, y podrás acceder a ella utilizando simplemente `$numero` en cualquier función o ámbito dentro del script.

``` php 
function prueba1() {
    global $numero;
    echo $numero; // Accede a la variable global $numero
}

function prueba2() {
    echo $numero; // Accede a la variable global $numero
}

$numero = 22; // Declaración global de $numero

prueba1(); // Imprime: 22
prueba2(); // Imprime: 22
```

Si se invierte el orden de las llamadas a las funciones `prueba2()` y `prueba1()` de la siguiente manera:

``` php
function prueba1() {
    global $numero;
    echo $numero; // Accede a la variable global $numero
}

function prueba2() {
    echo $numero; // Accede a la variable global $numero
}

$numero = 22; // Declaración global de $numero

prueba2(); // Imprime: Notice: Undefined variable: numero
prueba1(); // Imprime: 22
```

El resultado sería:
```
Warning: Undefined variable $numero in ... on line ...
22
```

Esto se debe a que, en PHP, las funciones se ejecutan secuencialmente. Al llamar a `prueba2()` antes que a `prueba1()`, la variable `$numero` aún no ha sido inicializada o asignada cuando se intenta acceder dentro de `prueba2()`. Por lo tanto, se produce un aviso (`Notice`) indicando que la variable es indefinida.

## $GLOBALS

En PHP, la variable superglobal `$GLOBALS` se utiliza para acceder a todas las variables globales desde cualquier parte del programa. `$GLOBALS` es un arreglo asociativo que contiene todas las variables globales como elementos del arreglo.

Puedes utilizar `$GLOBALS` de la siguiente manera:

``` php 
$numero = 22;
$texto = "Hola, mundo!";

function prueba() {
    echo $GLOBALS['numero']; // Acceder a la variable global $numero
    echo $GLOBALS['texto']; // Acceder a la variable global $texto
}

prueba(); // Imprimirá el valor de las variables globales
```
