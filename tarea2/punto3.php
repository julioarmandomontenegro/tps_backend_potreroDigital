<?php
$n = $_GET ["número"];
if ($n > 10 or $n < 2) {
    echo "el número ingresado es correcto";
} else {
    echo "el número ingresado no es correcto";
}
?>