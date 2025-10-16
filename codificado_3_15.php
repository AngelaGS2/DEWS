<?php
include "cripto.php";

if (isset($_POST['frase'], $_POST['desplazamiento'])) {
    $frase = $_POST['frase'];
    $desplazamiento = (int)$_POST['desplazamiento'];

    $frase_codificada = codificar($frase, $desplazamiento);

    echo "Frase original: " . htmlspecialchars($frase) . "<br>";
    echo "Desplazamiento: " . $desplazamiento . "<br>";
    echo "Frase codificada: " . htmlspecialchars($frase_codificada);
} else {
    echo "No se ha enviado la frase o el desplazamiento.";
}
?>
