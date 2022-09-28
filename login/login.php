<?php
$usuario = $_POST ["login"];
$contrasenia = $_POST ["password"];
$ckuser = "montenegrojulioarmando@gmail.com";
$ckpass = "4321";
if ($usuario == $ckuser and $contrasenia == $ckpass) {
    echo "correcto";
} else {
    echo "incorrecto";
}
?>