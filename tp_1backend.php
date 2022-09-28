<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp_1</title>
</head>
<body>
   <h2>ejercicio 1</h2> 
   <?php
   print "<p>Hola mundo</p>\n";
   ?>
   <hr>
   <h3>ejercicio 2</h3>
   <?php
   $bienvenida = "Hola mundo";
   print "<p>$bienvenida</p>\n";
   ?>
   <hr>
   <h4>ejercicio 3</h4>
   <?php
   $x = 24;
   $y = 6;
   print ($x + $y);
   print ($x - $y);
   print ($x * $y);
   print ($x / $y);
   print ($x % $y);
   ?>
   <hr>
   <h5>ejercicio 4</h5>
   <?php
   $c = 20;
   $farenheit = ($c * 9 / 5) + 32;
   print $farenheit;
   ?>
   <hr>
   <h6>ejercicio 5</h6>
   <?php
   $b = 18;
   $h = 12;
   $perimetroRectangulo = ($b * 2) + ($h * 2);
   $areaRectangulo = ($b * $h);   
   print $perimetroRectangulo;
   print $areaRectangulo;
   $r = 30;
   $perimetroCirculo = 2 * 3.14 * $r;
   $areaCirculo = 3.14 * $r * $r;
   print $perimetroCirculo;
   print $areaCirculo;
   ?>   
</body>
</html>