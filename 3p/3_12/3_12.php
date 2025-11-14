<?php
include "cripto.php";

$frase = "perro ladrador poco mordedor";
$desplazamiento = 3;

$frase_codificada = codificar($frase, $desplazamiento);
$frase_decodificada = decodificar($frase_codificada, $desplazamiento);

echo "FRASE: " . $frase . "<br>";
echo "DESPLAZAMIENTO: " . $desplazamiento . "<br>";
echo "FRASE CODIFICADA: " . $frase_codificada . "<br>";
echo "FRASE DECODIFICADA: " . $frase_decodificada . "<br>";
?>
