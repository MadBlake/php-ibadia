## Sintaxis

En PHP, las variables son utilizadas para almacenar y manipular datos. A diferencia de otros lenguajes de programación, en PHP no es necesario declarar explícitamente el [[Tipos de datos en php | tipo de variable]] antes de utilizarla.
 
Declaración y asignación de variables: En PHP, puedes crear una variable simplemente escribiendo el nombre de la variable y asignándole un valor utilizando el operador de asignación "=".

``` php 

$nombre = "Juan"; // Variable de tipo cadena (string)
$edad = 25; // Variable de tipo entero (integer)
$pi = 3.1416; // Variable de tipo flotante (float)
$esEstudiante = true; // Variable de tipo booleano (boolean)

```

## Convenciones de nombres:

- Los nombres de las variables en PHP comienzan con el símbolo "$" seguido del nombre que elijas. Por ejemplo, ` $nombre`, `$edad`, etc.
- Los nombres de las variables en PHP son sensibles a mayúsculas y minúsculas. `$nombre` y `$Nombre` son consideradas variables diferentes.

Tipado dinámico: En PHP, las variables no tienen un tipo fijo y pueden cambiar de tipo durante la ejecución del programa. Esto significa que puedes asignar un valor de un tipo específico a una variable y luego asignarle un valor de un tipo diferente más adelante sin necesidad de realizar una conversión explícita.


``` php 
$variable = "Hola"; // Variable de tipo cadena (string)
$variable = 10; // Variable de tipo entero (integer)
$variable = 3.14; // Variable de tipo flotante (float)
```

## Alcance de las variables: 

En PHP, el alcance de una variable determina en qué partes del programa se puede acceder a ella. PHP tiene varios tipos de alcance de variables, pero los más comunes son:

### Alcance local

Las variables locales se declaran dentro de una función o un bloque de código y solo están disponibles dentro de ese contexto.

``` php 
$variableGlobal = 10; // Variable global

function ejemploFuncion() {
    $variableLocal = 5; // Variable local
    echo $variableLocal; // Acceso a la variable local dentro de la función
}

echo $variableGlobal; // Acceso a la variable global fuera de la función
ejemploFuncion();
echo $variableLocal; // Error: variableLocal no está definida fuera de la función
```

### [[Global]] 

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


## Nombres de variables reservados para el sistema

![[Pasted image 20230622233251.png]]


