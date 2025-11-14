<?php
include "usuarios.php";

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$archivo = fopen("accesos.txt", "a");

if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $clave) {
    fwrite($archivo, "El usuario $usuario ha accedido al sistema.\n");
    fclose($archivo);
    header("Location: ok.php");
    exit;
} else {
    fwrite($archivo, "Intento fallido de acceso del usuario $usuario.\n");
    fclose($archivo);
    header("Location: error.html");
    exit;
}
?>
