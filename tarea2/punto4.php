<?php
$numero1 = $_GET ["login"];
$numero2 = $_GET ["password"];
$s = $numero1 + $numero2;
$r = $numero1 - $numero2; 
$m = $numero1 * $numero2;
$d = round($numero2 / $numero1);
$mod = $numero2 % $numero1;
if ($numero1 > $numero2) {
    echo nl2br("$s \n $r");          
} elseif ($numero2 > $numero1) {
    echo nl2br("$m \n $d \n $mod");
} else {
    echo "Los números ingresados son iguales";
}
?>  
 