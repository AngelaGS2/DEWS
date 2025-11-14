<?php 
	define("RADIO", 6.378);
	echo "Radio de la Tierra: " . RADIO . "<br>";
	define("DISTANCIA", 150000000);
	echo "Distancia de la Tierra a Sol: " . DISTANCIA . "<br>";
    define("PI", 3.1416);
    echo "Número PI: " . PI . "<br>";
    define("CIRCUMFERENCIA", 2*PI*RADIO);
    echo "Circumferencia = " . CIRCUMFERENCIA  . "<br>";
    echo "Vueltas al mundo: " . (DISTANCIA / CIRCUMFERENCIA );
?>