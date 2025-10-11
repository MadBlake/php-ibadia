<?php
    header('Content-type: image/png');

    $width = 200;
    $height = 100;
    $image = imagecreate($width, $height);


    $color_background = imagecolorallocate($image, 255, 255, 255); // Blanco
    $color_dots = imagecolorallocate($image, 0, 0, 0); // Negro
    $x1 = 0;
    $y1 = 0;
    $x2 = $width;
    $y2 = $height;
    imagerectangle($image, $x1, $y1, $x2, $y2, $color_dots);

    // Ejemplo para una ficha con valor 3 en un lado y 5 en el otro
    // Función auxiliar para dibujar puntos
    function draw_dot($img, $x, $y, $color)
    {
        $radius = 15;
        imagefilledellipse($img, $x, $y, $radius, $radius, $color);
    }


    // Dibujar los puntos para el primer valor (ej. 3)
    draw_dot($image, 50, 25, $color_dots);
    draw_dot($image, 50, 50, $color_dots);
    draw_dot($image, 50, 75, $color_dots);


    // Dibujar los puntos para el segundo valor (ej. 5)
    draw_dot($image, 150, 25, $color_dots);
    draw_dot($image, 150, 50, $color_dots);
    draw_dot($image, 150, 75, $color_dots);
    draw_dot($image, 100, 50, $color_dots);

    imagepng($image);
    imagedestroy($image);

?>

