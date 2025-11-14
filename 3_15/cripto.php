<?php
function codificar($texto, $desplazamiento) {
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if ($letra == " ") {
            $resultado .= " ";
        } else {
            $codigo = ord($letra) + $desplazamiento;

            if ($codigo > ord('z')) {
                $codigo -= 26;
            }

            $resultado .= chr($codigo);
        }
    }

    return $resultado;
}

function decodificar($texto, $desplazamiento) {
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if ($letra == " ") {
            $resultado .= " ";
        } else {
            $codigo = ord($letra) - $desplazamiento;

            if ($codigo < ord('a')) {
                $codigo += 26;
            }

            $resultado .= chr($codigo);
        }
    }

    return $resultado;
}
?>
