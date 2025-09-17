
# Tipos de datos

## String
Los datos  de tipo string pueden ser escritos con comillas dobles (" ") o con comillas simple (' '). Existe una diferencia importante, podemos escribir variables dentro de una cadena de texto con comillas dobles y se interpretará como el valor de la variable. 
Sin embargo, en el caso de las comillas simples, para acceder al valor de las variables, tendremos que concatenar la cadena de texto con la variable.

```php
<?php

$dia = "martes";

echo "Hoy es {$dia} 13"; //Hoy es martes 13  
echo"<br>";
echo 'Mañana es {$dia} 13'; //Mañana es {$dia} 13  
echo"<br>";
echo 'Ayer fué '.$dia.' 13'; //Ayer fué martes 13

?>
```

## **Enteros (int):** 

Los enteros son números sin punto decimal. Pueden ser positivos o negativos.

``` php
$edad = 25;
$contador = -10;
```

## **Flotantes (float o double):** 

Los flotantes representan números con punto decimal.

``` php
$precio = 19.99;
$pi = 3.14159;
```

## **Booleanos (bool):** 

Los booleanos representan valores de verdadero (`true`) o falso (`false`).

```php
$esVerdadero = true;
$esFalso = false;
```

## **Listas (array):** 

Las listas representan colecciones ordenadas de valores. Pueden contener diferentes tipos de datos.

```php
$nombres = array("Juan", "María", "Carlos");
$edades = [25, 30, 22];
```

## **Recursos (resource):** 

Los recursos representan conexiones a recursos externos, como archivos o bases de datos.

```php
$archivo = fopen("archivo.txt", "r");
```

## **Nulos (null):** 

El valor `null` representa la ausencia de un valor.

```php
$valorNulo = null;
```

## **Arrays asociativas:** 

Las arrays asociativas permiten asociar claves con valores en lugar de usar índices numéricos.

```php
$persona = array(
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Madrid"
);

echo "Nombre: " . $persona["nombre"];
```

## **Arrays multidimensionales (Matrices):** 

Los arreglos multidimensionales son arreglos que contienen otros arreglos como elementos.

```php
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo $matriz[1][2]; // Imprime el valor 6
```

## **Cadenas heredoc y nowdoc:** 

Las cadenas heredoc y nowdoc permiten definir cadenas de texto sin necesidad de escapar caracteres.

```php
$mensaje = <<<TEXTO
Este es un mensaje largo
que abarca varias líneas.
TEXTO;

echo $mensaje;
```

## **Interfaces:** 

Las interfaces definen métodos que las clases deben implementar.

```php
interface Saludable {
    public function saludar();
}

class Persona implements Saludable {
    public function saludar() {
        return "Hola desde la persona.";
    }
}

$persona = new Persona();
echo $persona->saludar();
```

## **Traits:** 

Los traits permiten reutilizar código en múltiples clases.

```php
trait Saludo {
    public function decirHola() {
        return "¡Hola!";
    }
}

class Persona {
    use Saludo;
}

$persona = new Persona();
echo $persona->decirHola();
```

## **Namespace:** 

Los namespaces permiten organizar y encapsular clases y funciones.

```php
namespace MiProyecto;

class ClaseA {
    // ...
}

$instancia = new ClaseA();
```

## Objects 

PHP permite utilizar el paradigma de programación orientada a objetos. Para declararlo solo debemos crear las clases y crear las instancias como en java. La diferencia más visible en cuanto a la sintaxis es que a diferencia de java, que utiliza el "." para llamar a los metodos del objeto, en PHP se usa la flecha "->".
 

``` php
class Persona {
    public $nombre;
    public $edad;
}

$persona = new Persona();
$persona->nombre = "Ana";
$persona->edad = 28;

```

## Particularidades de php 

En php existe una particularidad en cuanto a los variables, y es que los valores de las variables pueden hacer referencia a variables:

``` php
<?php

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a; //Returns Hello
echo $$a; //Returns World
echo $$$a; //Returns Foo
echo $$$$a; //Returns Bar
echo $$$$$a; //Returns a

echo $$$$$$a; //Returns Hello
echo $$$$$$$a; //Returns World

?>
```
