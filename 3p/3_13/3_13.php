<?php
include "cripto.php";

$ciudades = array("madrid", "sevilla", "barcelona", "valencia", "granada");
$desplazamiento = 3;
$codificado = array();
$decodificado = array();

foreach ($ciudades as $ciudad) {
    $codificado[] = codificar($ciudad, $desplazamiento);
}

foreach ($codificado as $texto) {
    $decodificado[] = decodificar($texto, $desplazamiento);
}

for ($i = 0; $i < count($ciudades); $i++) {
    echo "Original: " . $ciudades[$i] .
         " - Codificada: " . $codificado[$i] .
         " - Decodificada: " . $decodificado[$i] . "<br>";
}
?>