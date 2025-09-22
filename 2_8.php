<?php 
	echo "Producto - Precio/kg - Peso - Precio" . "<br>";
    define("PRECIO_JUDIAS", 3.50);
    $peso_judias = 1.21;
    $coste_judias = PRECIO_JUDIAS * $peso_judias;
	echo "Precio Judías: " . PRECIO_JUDIAS .  "</t>" . $peso_judias . number_format($coste_judias, 2);
    define("PRECIO_PATATAS", 3.50);
    $peso_patatas = 1.21;
    $coste_patatas = PRECIO_PATATAS * $peso_patatas;
	echo number_format($coste_patatas, 2);
    define("PRECIO_TOMATES", 3.50);
    $peso_tomates = 1.21;
    $coste_tomates = PRECIO_TOMATES * $peso_tomates;
	echo number_format($coste_tomates, 2);
    define("PRECIO_MANZANAS", 3.50);
    $peso_manzanas = 1.21;
    $coste_manzanas = PRECIO_MANZANAS * $peso_manzanas;
	echo number_format($coste_manzanas, 2);
    define("PRECIO_UVAS", 3.50);
    $peso_uvas = 1.21;
    $coste_uvas = PRECIO_UVAS * $peso_uvas;
	echo number_format($coste_uvas, 2);

    $total = $coste_judias + $coste_manzanas + $coste_patatas + $coste_tomates + $coste_uvas;
    echo "Total: " . $total . "euros" ."<br>";
    echo "Gracias por la compra";

?>