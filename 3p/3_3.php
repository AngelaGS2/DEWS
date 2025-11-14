<?php
function comprobarNIF($nif){
    if(strlen($nif) != 9){
        return "El NIF no tiene la longitud válida.";
    }

    for ($i=0; $i < 8; $i++){
        $codigo = ord($nif[$i]);
        if ($codigo < 48 || $codigo > 57){
            return "Los primeros 8 carácteres deben ser números";
        }
    }

    $letra = $nif[8];
    $codigo = ord($letra);
    if (!(($codigo >= 65 && $codigo <= 90) || ($codigo >=97 && $codigo <=122))){
        return "El último carácter debe de ser una letra";
    }

    $letra = strtoupper($letra);

    $nifC = substr($nif, 0 , 8) . $letra;
    return "NIF válido: " . $nifC;
}

echo comprobarNIF("85974561M") . "<br>";
echo comprobarNIF("8597Y561M") . "<br>";
echo comprobarNIF("859745610") . "<br>";