<?php

function pinta_puntos($im, $num, $desfase){
  $white = imagecolorallocate($im, 255, 255, 255);
  imagerectangle($im, $desfase, 0, 40, 40, $white);
  switch($num){

    case '1': 
      imagefilledellipse($im, 20+$desfase, 20, 5, 5, $white);
      break;

    case '2': 
      imagefilledellipse($im, 10+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 30, 5, 5, $white);
    break;

    case '3': 
      imagefilledellipse($im, 10+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 20+$desfase, 20, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 30, 5, 5, $white);
      break;

    case '4': 
      imagefilledellipse($im, 10+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 10+$desfase, 30, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 30, 5, 5, $white);
      break;

    case '5': 
      imagefilledellipse($im, 10+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 20+$desfase, 20, 5, 5, $white);
      imagefilledellipse($im, 10+$desfase, 30, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 30, 5, 5, $white);
      break;

    case '6': 
      imagefilledellipse($im, 10+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 20+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 10, 5, 5, $white);
      imagefilledellipse($im, 10+$desfase, 30, 5, 5, $white);
      imagefilledellipse($im, 20+$desfase, 30, 5, 5, $white);
      imagefilledellipse($im, 30+$desfase, 30, 5, 5, $white);
      break;

    default:
      break;
  }
}

  $image = imagecreatetruecolor(80, 40);
  
  pinta_puntos($image, $_GET['a'], 0);
  pinta_puntos($image, $_GET['b'], 40);
  
  // output the picture
  header("Content-type: image/png");
  imagepng($image);
  imagedestroy($image);

?>
