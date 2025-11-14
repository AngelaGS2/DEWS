<?php
for($i = ord('a'); $i <= ord('z'); $i++){
    $letra = chr($i);
    echo $letra . " - "  . strtoupper($letra) . "<br>";
}
?>