<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp_2</title>
</head>
<body>
    <h1>1)</h1>
    <?php
    $n = int();
    if ($n > 0) {
        echo "$n es un número positivo";
    }
    ?>
   <hr>
    <h2>2)</h2>
    <?php
    $n = int();
    if (($n > 1) and ($n < 10)) {
        echo "está entre uno y diez";
    } else {
        echo "no está entre uno y diez";
    }
    ?>
   <hr>
    <h3>3)</h3>
    <?php
    $n = int();
    if (($n > 10) or ($n < 2)) {
        echo "número válido";
    } else {
        echo "está entre dos y diez";        
    }
    ?>
   <hr>
    <h4>4)</h4)
    <?php
    $numero1 = int();
    $numero2 = int();
    $s = $numero1 + $numero2;
    $r = $numero1 - $numero2;
    $m = $numero1 * $numero2;
    $d = $numero2 / $numero1;
    $mod = $numero2 % $numero1;
    if ($numero1 > $numero2) {
        echo $s;\n$r;        
    } elseif ($numero2 > $numero1) {
        echo $m;\n$d;\n$mod;
    } else {
        echo "Los números ingresados son iguales";
    }
    ?>  
</body>
</html>