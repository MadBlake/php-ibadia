# URLs

En PHP, puedes trabajar con las URL para obtener información sobre la URL actual, manipular parámetros y realizar redireccionamientos.

Algunos aspectos importantes sobre el manejo de URLs en PHP

## Obtener la URL actual 

Puedes obtener la URL actual utilizando la variable superglobal `$_SERVER['REQUEST_URI']`. Esta variable contiene la parte de la URL después del nombre de dominio, incluyendo cualquier consulta o fragmento.

``` php
$urlActual = $_SERVER['REQUEST_URI'];
echo $urlActual;
```

## GET

Para pasar variables por URL en PHP, puedes agregar parámetros de consulta a la URL utilizando el símbolo de interrogación (`?`) seguido del nombre del parámetro y su valor. Puedes pasar múltiples variables separándolas con el símbolo `&`. Luego, puedes acceder a estos parámetros de consulta en el archivo PHP de destino utilizando la variable superglobal `$_GET`.

Por ejemplo si tenemos un formulario html que nos envia los datos "nombre" y "edad" y usamos el metodo "GET" para pasar la información

``` html
<h2>Mostrar datos</h2>
<form action="example.php" method="GET">
	<label for="username">Nombre :</label>
	<input type="text" id="username" name="username" required><br><br>
	<label for="edad">Edad :</label>
	<input type="edad" id="edad" name="edad" required><br><br>
	<input type="submit" value="enviar datos">
</form>
```

esto nos enviaría a una página con una URL similar a esta:

``` URL
http://example.com/example.php?nombre=John&edad=25
```

Al acceder a la URL mencionada, el código PHP obtendrá los valores de los parámetros `nombre` y `edad` utilizando `$_GET` y los podrá utilizar.

``` php
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];

echo "Hola, $nombre. Tu edad es $edad años.";
```

Los valores de los parámetros de consulta en la URL son recibidos como cadenas de texto, por lo que es importante validar estos valores antes de utilizarlos en una aplicación para prevenir vulnerabilidades de seguridad, como ataques de inyección de código.

## POST

Para enviar variables por POST en PHP, se debe utilizar un formulario HTML con el método `POST`. El formulario enviará los datos ingresados por el usuario al archivo PHP de destino. En el archivo PHP, puedes acceder a los valores enviados utilizando la variable superglobal `$_POST`.

Ejemplo de un formulario HTML que envía la información mediante el metodo POST:

```php
<form action="example.php" method="POST">
	<label for="username">Nombre de usuario:</label>
	<input type="text" id="username" name="username" required><br><br>
	<label for="password">Contraseña:</label>
	<input type="password" id="password" name="password" required><br><br>
	<input type="submit" value="Iniciar sesión">
</form>
```

script que lee las variables, mediante la variable superglobal POST:

```php
echo "Bienvenido ".$_POST['username'];
echo "Tu contraseña es: ".$_POST['password'];
```

En este ejemplo, cuando el usuario envía el formulario haciendo clic en el botón "Enviar", los datos ingresados se enviarán al archivo `example.php` utilizando el método POST. En `example.php`, los valores se obtienen a través de la variable superglobal `$_POST` y se utilizan para imprimir un mensaje personalizado.

Hay que tener en mente que al utilizar el método POST, los datos enviados no se mostrarán en la URL como ocurre con el método GET. Esto puede ser útil cuando se manejan datos sensibles, como contraseñas o información privada.