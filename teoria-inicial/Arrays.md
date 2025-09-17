Los arrays son estructuras de datos fundamentales en la programación, que permiten almacenar y manipular conjuntos de valores relacionados bajo un único nombre. En PHP, los arrays son especialmente versátiles, ya que pueden contener diferentes tipos de datos y se pueden utilizar de diversas formas. 

## Declaración

Hay varias formas de crear un array en PHP. La forma más común es utilizando la función `array()`, que acepta una lista de elementos separados por comas.

``` php
$miArray = array(1, 2, 3, 4, 5);
```

También se puede utilizar una sintaxis más corta utilizando corchetes `[]`.

``` php
$miArray = [1, 2, 3, 4, 5];
```

## Uso

Los arrays en PHP son flexibles y pueden cambiar de tamaño dinámicamente. Puedes acceder a los elementos de un array utilizando su índice, que representa la posición del elemento en el array. Los índices en PHP comienzan desde cero.

``` php
$frutas = array('manzana', 'banana', 'cereza');
echo $frutas[0]."<br>";  // Imprime 'manzana'
echo $frutas[1]."<br>";  // Imprime 'banana'
echo $frutas[2]."<br>";  // Imprime 'cereza'
```

También es posible asignar valores a un índice específico o agregar nuevos elementos al final del array utilizando la sintaxis de corchetes.

``` php
$frutas[3] = 'dátil';  // Asigna 'dátil' al índice 3
$frutas[] = 'uva';    // Agrega 'uva' al final del array
```

Además de los índices numéricos, los arrays en PHP también pueden utilizar claves o nombres de cadenas como índices. Estos se conocen como arrays asociativos. Los arrays en php, permiten guardar diferentes tipos de datos en la misma lista, así, podemos tener dentro de una misma array datos de tipo "String", "integer", "boolean", etc.

``` php
$persona = array(
    'nombre' => 'David',
    'edad' => 30,
    'profesion' => 'ingeneiro'
);

echo $persona['nombre'];     // Imprime 'David'
echo $persona['edad'];       // Imprime 30
echo $persona['profesion'];  // Imprime 'ingeniero'

$persona['nombre'] = 'Miguel';
echo $persona['nombre'];     // Imprime 'Miguel' 
```

Se pueden recorrer los elementos de una array utilizando [[Bucles |bucles]], como `for` o `foreach`. También existen muchas funciones integradas en PHP para trabajar con arrays, como `count()` para contar el número de elementos, `array_push()` para agregar elementos al final del array, `array_pop()` para eliminar y devolver el último elemento, entre otras.

### Manipulación básica de arrays:

- `array()`: Crea un nuevo array.
- `count()`: Cuenta el número de elementos en un array.
- `empty()`: Verifica si un array está vacío.
- `isset()`: Verifica si una variable está definida y no es nula.

``` php
// array()
$frutas = array('manzana', 'banana', 'cereza');
print_r($frutas);

// count()
$numeroElementos = count($frutas);
echo $numeroElementos;

// empty()
$emptyArray = array();
if (empty($emptyArray)) {
    echo 'El array está vacío.';
}

// isset()
if (isset($frutas[1])) {
    echo 'La posición 1 del array está definida.';
}

//unset
php
unset($persona['edad']); //elimina un elemento de la array asociativa
```

### Acceso y modificación de elementos: 
- `$array[index]`: Accede al valor de un elemento en el índice dado.
- `array_key_exists()`: Verifica si una clave existe en el array.
- `array_push()`: Agrega uno o más elementos al final del array.
- `array_pop()`: Elimina y devuelve el último elemento del array.
- `array_shift()`: Elimina y devuelve el primer elemento del array.
- `array_unshift()`: Agrega uno o más elementos al inicio del array.
- `array_slice()`: Extrae una porción del array.

``` php
// Acceso a elementos
$frutas = array('manzana', 'banana', 'cereza');
echo $frutas[1];  // Imprime 'banana'

//acceso a elementos asociativos 



// Agregar elementos
$personas = array('Juan', 'María');
$personas[] = 'Pedro';  // Agrega 'Pedro' al final del array
$personas[0] = 'Santiago'; //reemplaza el elemento que se encuentra en la posición '0' por 'Santiago'
array_push($personas, "Manuel"); //agrega a 'Manuel' al final del array
print_r($personas);

// array_pop()
$ultimaFruta = array_pop($frutas);  // Elimina y devuelve 'cereza'
echo $ultimaFruta;  // Imprime 'cereza'
print_r($frutas);

```

### Recorrido de arrays:

- `foreach`: Itera sobre los elementos de un array.
- `reset()`: Restablece el puntero interno del array al primer elemento.
- `current()`: Devuelve el elemento actual en el puntero interno del array.
- `key()`: Devuelve la clave del elemento actual en el puntero interno del array.
- `next()`: Avanza el puntero interno del array al siguiente elemento.
- `prev()`: Retrocede el puntero interno del array al elemento anterior.
- `end()`: Establece el puntero interno del array al último elemento.
``` php
// foreach
$frutas = array('manzana', 'banana', 'cereza');
foreach ($frutas as $fruta) {
    echo $fruta . ' ';
}

// foreach asociativa
foreach ($persona as $clave => $valor) {
    echo "Clave: $clave, Valor: $valor\n";
}


// reset(), current(), key(), next()
reset($frutas);
echo current($frutas);  // Imprime 'manzana'
echo key($frutas);     // Imprime 0

next($frutas);
echo current($frutas);  // Imprime 'banana'
echo key($frutas);     // Imprime 1
```

### Ordenamiento y manipulación de arrays:

- `sort()`: Ordena un array en orden ascendente.
- `rsort()`: Ordena un array en orden descendente.
- `asort()`: Ordena un array asociativo en orden ascendente según los valores.
- `arsort()`: Ordena un array asociativo en orden descendente según los valores.
- `ksort()`: Ordena un array asociativo en orden ascendente según las claves.
- `krsort()`: Ordena un array asociativo en orden descendente según las claves.
- `array_merge()`: Combina dos o más arrays en uno.
- `array_reverse()`: Devuelve un nuevo array con los elementos en orden inverso.

``` php
// sort()
$numeros = array(5, 2, 8, 1);
sort($numeros);
print_r($numeros);  // Imprime Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 8 )

// array_reverse()
$frutas = array('manzana', 'banana', 'cereza');
$frutasReversa = array_reverse($frutas);
print_r($frutasReversa);  // Imprime Array ( [0] => cereza [1] => banana [2] => manzana )

if (array_key_exists('nombre', $persona)) {     
	echo "La clave 'nombre' existe en la array."; 
}  
$claves = array_keys($persona); 
print_r($claves); // Imprime todas las claves de la array.

```
