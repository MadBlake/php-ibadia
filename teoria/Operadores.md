# Operadores

## Operadores aritmeticos

En php tenemos diferentes tipos de operadores aritmeticos, que nos permiten obtener valores a partir de otros valores, por ejemplo en una suma, resta, multiplicación, etc.


``` php
$a = 2;
$b = 3;

//suma
echo $a + $b;   //el resultado será 5
//resta
echo $a - $b;   //el resultado será -1
//multiplicación
echo $a * $b;   //el resultado será 6
//división
echo $a / $b;   //el resultado será 0.66666666666667
//Módulo
echo $a % $b;   //el resultado será 2
//Potencia
echo $a ** $b;  //el resultado será 8
```

## Operadores de asignación

En este caso el operando de la izquierda se establece con el valor de la derecha. A diferencia de las operaciones anteriores, en este caso estamos modificando el valor de la variable de la izquierda.

``` php
$num1 = 12;
$num2 = 5;

//expresión abreviada de num1 = num1 + num2
echo $num1." += ".$num2 ." = ". $num1 += $num2;  //el resultado será 17
//expresión abreviada de num1 = num1 - num2
echo $num1." -= ".$num2 ." = ". $num1 -= $num2;  //el resultado será 12
//expresión abreviada de num1 = num1 * num2
echo $num1." /= ".$num2 ." = ". $num1 *= $num2;  //el resultado será 60
//expresión abreviada de num1 = num1 / num2
echo $num1." /= ".$num2 ." = ". $num1 /= $num2;  //el resultado será 12
//expresión abreviada de num1 = num1 % num2
echo $num1." %= ".$num2 ." = ". $num1 %= $num2;  //el resultado será 2
//expresión abreviada de num1 = num1 ** num2
echo $num1." **= ".$num2 ." = ". $num1 **= $num2;  //el resultado será 32
```

## Operadores de comparación

Los operadores de comparación son herramientas fundamentales en la programación y se utilizan para comparar dos valores y determinar si una relación específica entre ellos es verdadera o falsa. Estos operadores devuelven un valor booleano (true o false) según el resultado de la comparación. Aquí están los principales operadores de comparación y cómo funcionan:

### Igual ( == )

El operador de igualdad (`==`) se utiliza para comprobar si dos valores son iguales. Si los valores son iguales, la expresión es verdadera; de lo contrario, es falsa.

``` php
$numero1 = 10;
$numero2 = 5;

$resultado = ($numero1 != $numero2); // El resultado será false, ya que 10 no es igual a 5.
echo json_encode($resultado);
```

### No igual ( != ) y (<>)
El operador de no igualdad (`!=`) verifica si dos valores no son iguales. Si los valores no son iguales, la expresión es verdadera; si son iguales, la expresión es falsa.

``` php
$numero1 = 10;
$numero2 = 5;

$resultado = ($numero1 != $numero2); // El resultado será true, ya que 10 no es igual a 5.
echo json_encode($resultado);
```

El operador `<>` en PHP es una alternativa al operador de desigualdad `!=`. Ambos operadores realizan la misma función: comparar si dos valores no son iguales. La diferencia entre ellos es principalmente sintáctica, ya que `<>` es un operador que se heredó de otros lenguajes de programación, mientras que `!=` es más comúnmente utilizado y se ha vuelto más estándar en PHP.

``` php
$numero1 = 10;
$numero2 = 5;

if ($numero1 <> $numero2) {
    echo "Los números no son iguales."; // Se imprimirá este mensaje, ya que 10 no es igual a 5.
}
```

### Comparadores idénticos

En PHP, una comparación de igualdad entre un número y una cadena puede tener un resultado sorprendente debido a la conversión de tipos automática que realiza el lenguaje.

En PHP, cuando comparas un número con una cadena que empieza con un dígito, PHP intenta convertir la cadena a un número y luego realiza la comparación. Esto puede generar resultados inesperados 

``` php
$numero = 5;
$cadena = "5";

if ($numero == $cadena) {
    echo "Son iguales.";     //el resultado será que son iguales 
} else {
    echo "Son diferentes.";
}
```

En este ejemplo, aunque `$numero` es un número entero y `$cadena` es una cadena de texto, la comparación usando `==` devuelve `true`. Esto es porque PHP convierte automáticamente la cadena "5" en el número `5` y luego los compara.

### Idéntico ( === ) y no idéntico ( !== )

Para realizar una comparación estricta que también tome en cuenta el tipo de dato, se utiliza el operador `===` y el operador `!==` 

``` php
$numero = 5;
$cadena = "5";

if ($numero === $cadena) {
    echo "Son iguales.";
} else {
    echo "Son diferentes.";   //el resultado será que son diferentes 
}

if ($numero !== $cadena) {
	echo "Son diferentes.";   //el resultado será que son diferentes 
} else {
    echo "Son iguales.";
}
```



### Mayor que (>)

El operador mayor que (`>`) se utiliza para comparar dos valores y determinar si el valor de la izquierda es mayor que el valor de la derecha. Devuelve `true` si la afirmación es verdadera y `false` si es falsa.

``` php
$numero1 = 10;
$numero2 = 5;

$resultado = ($numero1 > $numero2); // El resultado será true, ya que 10 es mayor que 5.
echo json_encode($resultado);
```

### Mayor o igual que (>=) 

El operador mayor o igual que (`>=`) compara dos valores y devuelve `true` si el valor de la izquierda es mayor o igual al valor de la derecha. Devuelve `false` si la afirmación es falsa.

``` php
$numero1 = 10;
$numero2 = 5;

$resultado = ($numero1 >= $numero2); // El resultado será true, ya que 10 es mayor que 5.
echo json_encode($resultado);
```

### Menor que (<)

El operador menor que (`<`) compara dos valores y devuelve `true` si el valor de la izquierda es menor que el valor de la derecha. Devuelve `false` si la afirmación es falsa.

``` php
$numero1 = 10;
$numero2 = 5;

$resultado = ($numero1 < $numero2); // El resultado será false, ya que 10 no es menor que 5.
echo json_encode($resultado);
```

### Menor o igual que (<=)

El operador menor o igual que (`<=`) compara dos valores y devuelve `true` si el valor de la izquierda es menor o igual al valor de la derecha. Devuelve `false` si la afirmación es falsa.

``` php
$numero1 = 10;
$numero2 = 10;

$resultado = ($numero1 <= $numero2); // El resultado será true, ya que 10 es igual a 10.
echo json_encode($resultado);
```

### Operador de nave espacial (<=>):

El operador de nave espacial (`<=>`) se introdujo en PHP 7 y se utiliza para comparar dos valores. Devuelve un número negativo si el valor de la izquierda es menor, un número positivo si el valor de la derecha es menor y cero si ambos valores son iguales.

``` php
$numero1 = 10;
$numero2 = 5;

$resultado = $numero1 <=> $numero2; // El resultado será 1, ya que 10 es mayor que 5.
echo $resultado;
```

## Operadores de incremento/decremento

Los operadores de incremento y decremento en PHP son utilizados para aumentar o disminuir el valor de una variable numérica en una unidad. Estos operadores son muy útiles cuando necesitas manipular valores numéricos en tus programas. Aquí están los operadores de incremento y decremento en PHP.

Es importante tener en cuenta que los operadores de incremento y decremento solo se pueden utilizar con variables numéricas. Si intentas utilizarlos con variables no numéricas, se producirá un error.

### Operador de incremento (`++`)

El operador de incremento `++` se utiliza para aumentar el valor de una variable numérica en una unidad. Puedes utilizarlo tanto como prefijo o sufijo en la variable.

#### Prefijo 
Primero se incrementa el valor y luego se utiliza en la expresión.

``` php
$numero = 5;
++$numero; // Ahora $numero es 6
```

#### Sufijo 
Primero se utiliza el valor actual en la expresión y luego se incrementa.

``` php
$numero = 5;
$incrementado = $numero++; // $incrementado es 5, y $numero es 6
```

### Operador de decremento (`--`)

El operador de decremento `--` se utiliza para disminuir el valor de una variable numérica en una unidad. Al igual que con el operador de incremento, puedes usarlo como prefijo o sufijo en la variable.

#### Prefijo 
Primero se decrementa el valor y luego se utiliza en la expresión.

``` php
$numero = 5;
--$numero; // Ahora $numero es 4
```

#### Sufijo 
Primero se utiliza el valor actual en la expresión y luego se decrementa.

``` php
$numero = 5;
$decrementado = $numero--; // $decrementado es 5, y $numero es 4
```

Hay que tener en mente a la hora de utilizar echo, porque esto puede afectar el resultado de lo que queremos hacer.

``` php
$numero1 = 5;
$numero2 = 10;

echo $numero1++;   //Se mostrará 5 en el navegador
echo "<br>";
echo $numero1;     //Se mostrará 6 en el navegador
echo "<br>";
echo ++$numero2;   //Se mostrará 11 en el navegador
echo "<br>";
echo $numero2;     //Se mostrará 11 en el navegador
```


## Operadores logicos 

Los operadores lógicos en PHP se utilizan para combinar expresiones lógicas y evaluar si ciertas condiciones son verdaderas o falsas. Los operadores lógicos son fundamentales para tomar decisiones basadas en múltiples condiciones. 

### Operador AND (`&&` o `and`)

El operador AND devuelve `true` si todas las expresiones que se evalúan son verdaderas. Si al menos una de las expresiones es falsa, el resultado será `false`.

``` php
$edad = 25;
$tenerCarnet = true;

if ($edad >= 18 && $tenerCarnet) {
    echo "Puedes conducir un coche.";  //el resultado es correcto porque ambas condiciones se cumplen
} else {
    echo "No puedes conducir un coche.";
}
// También es válido con "and"
if ($edad >= 18 and $tenerCarnet) {
	echo "Puedes conducir un coche.";  //el resultado es correcto porque ambas condiciones se cumplen
	echo "<br>";
} else {
	echo "No puedes conducir un coche.";
}
```

### Operador OR (`||` o `or`)

El operador OR devuelve `true` si al menos una de las expresiones que se evalúan es verdadera. Solo si todas las expresiones son falsas, el resultado será `false`.

``` php
$esEstudiante = false;
$esEmpleado = true;

if ($esEstudiante || $esEmpleado) {
    echo "Eres estudiante o empleado.";  //el resultado es correcto porque una de las condiciones se cumple
} else {
    echo "No eres estudiante ni empleado.";
}
// También es válido con "or"
if ($esEstudiante or $esEmpleado) {
    echo "Eres estudiante o empleado.";  //el resultado es correcto porque una de las condiciones se cumple
} else {
    echo "No eres estudiante ni empleado.";
}
```

### Operador NOT (`!`)

El operador NOT se utiliza para negar una expresión. Si una expresión es verdadera, el operador NOT la convierte en falsa y viceversa.

``` php
$esEstudiante = false;

if (!$esEstudiante) {
    echo "No eres estudiante.";   //el resultado será que "no es estudiante" dado que la variable es false
} else {
    echo "Eres estudiante.";
}
```

### Operador XOR (`^` o `xor`)

El operador XOR (OR exclusivo) es un operador lógico que se utiliza para evaluar dos expresiones y devuelve `true` si exactamente una de las expresiones es verdadera y la otra es falsa. Si ambas expresiones son verdaderas o ambas son falsas, el operador XOR devuelve `false`.

En PHP, el operador XOR se representa mediante el símbolo `^`.

Esta sería la tabla de verdad de Xor

|Expresión 1|Expresión 2|Resultado|
|---|---|---|
|false|false|false|
|false|true|true|
|true|false|true|
|true|true|false|

``` php
$expresion1 = true;
$expresion2 = false;

$resultado = $expresion1 ^ $expresion2; // El resultado será true, ya que una expresión es verdadera y la otra es falsa.
echo json_encode($resultado); //nos muestra 1

//También se puede usar la palabra reservada xor
$resultado = $expresion1 xor $expresion2;
echo json_encode($resultado); //nos muestra true
```

En PHP, el operador XOR (`^`) realiza una operación a nivel de bits en números enteros y no es exclusivo de valores booleanos. Cuando utilizas el operador XOR con variables booleanas como en el ejemplo anterior, PHP convierte los valores booleanos `true` y `false` en valores numéricos `1` y `0`, respectivamente. Luego, aplica la operación a nivel de bits, lo que resulta en un valor numérico como resultado.


### Precedencia de operadores

Cuando combinas múltiples operadores lógicos en una expresión, es importante tener en cuenta la precedencia de los operadores. Los operadores NOT tienen la mayor precedencia, seguidos de los operadores AND y luego los operadores OR. Sin embargo, siempre es recomendable usar paréntesis para agrupar expresiones y evitar ambigüedades.

``` php
$edad = 25;
$tenerCarnet = true;
$esEstudiante = false;

if (($edad >= 18 && $tenerCarnet) || $esEstudiante) {
    echo "Puedes conducir un coche o eres estudiante.";
} else {
    echo "No puedes conducir un coche y no eres estudiante.";
}
```