<?php
$frase = "El perro de San Roque no tiene rabo";

echo "FRASE A ANALIZAR: " . $frase . "<br>";
echo "<br>";

$fraseNoEspacios = str_replace(" ", "", $frase);
echo strlen($fraseNoEspacios) . " letras" . "<br>";

$palabras = explode(" ", $frase);
$num_palabras = count($palabras);

echo (count($palabras)-1). " espacios en blanco" . "<br>";

echo $num_palabras . " palabras" . "<br>";
echo "<br>";

foreach ($palabras as $palabra){
    echo $palabra . " ".strlen($palabra). " letras" . "<br>";
}

?>
