<?php
include "usuarios-3_17.php";

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$archivo = fopen("accesos-3_17.txt", "a");

if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $clave) {
    fwrite($archivo, "El usuario $usuario ha accedido al sistema.\n");
    fclose($archivo);
    header("Location: ok-3_17.php");
    exit;
} else {
    fwrite($archivo, "Intento fallido de acceso del usuario $usuario.\n");
    fclose($archivo);
    header("Location: error-3_17.html");
    exit;
}
?>
