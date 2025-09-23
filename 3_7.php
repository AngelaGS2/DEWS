<?php
$frase = "perro ladrador poco mordedor";
$desplazamiento = 3;
$frase_codificada="";
for ($i = 0; $i < strlen($frase); $i++){
    $letra = $frase[$i];
    if($letra == " "){
        $frase_codificada .= " ";
    } else {
        $codigo = ord($letra) + $desplazamiento;
        if($codigo == ord('z')){
            $codigo = $codigo - 26;
        }
        $frase_codificada .= chr($codigo);
    }
}
echo "FRASE: " . $frase . "<br>";
echo "DESPLAZAMIENTO: " . $desplazamiento . "<br>";
echo "FRASE CODIFICADA: " . $frase_codificada . "<br>";
?>