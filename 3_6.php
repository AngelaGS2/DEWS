<?php
$frase = "perro ladrador poco mordedor";
$frase_codificada="";
for ($i = 0; $i < strlen($frase); $i++){
    $letra = $frase[$i];
    if($letra == " "){
        $frase_codificada .= " ";
    } else {
        $codigo = ord($letra);
        if($codigo == ord('z')){
            $nuevo_codigo = ord('a');
        }else {
            $nuevo_codigo = $codigo + 1;
        }
        $frase_codificada .= chr($nuevo_codigo);
    }
}
echo "FRASE: " . $frase . "<br>";
echo "FRASE CODIFICADA: " . $frase_codificada . "<br>";
?>