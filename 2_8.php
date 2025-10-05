<?php
    echo "Producto - Precio/kg - Peso - Precio<br>";

    define("PRECIO_JUDIAS", 3.50);
    define("PRECIO_PATATAS", 1.20);
    define("PRECIO_TOMATES", 2.35);
    define("PRECIO_MANZANAS", 1.80);
    define("PRECIO_UVAS", 2.10);

    $peso_judias = 1.21;
    $peso_patatas = 2.35;
    $peso_tomates = 1.50;
    $peso_manzanas = 1.75;
    $peso_uvas = 0.80;

    $coste_judias = PRECIO_JUDIAS * $peso_judias;
    $coste_patatas = PRECIO_PATATAS * $peso_patatas;
    $coste_tomates = PRECIO_TOMATES * $peso_tomates;
    $coste_manzanas = PRECIO_MANZANAS * $peso_manzanas;
    $coste_uvas = PRECIO_UVAS * $peso_uvas;

    echo "Judías - " . PRECIO_JUDIAS . "€/kg - " . $peso_judias . "kg - " . number_format($coste_judias, 2) . "€<br>";
    echo "Patatas - " . PRECIO_PATATAS . "€/kg - " . $peso_patatas . "kg - " . number_format($coste_patatas, 2) . "€<br>";
    echo "Tomates - " . PRECIO_TOMATES . "€/kg - " . $peso_tomates . "kg - " . number_format($coste_tomates, 2) . "€<br>";
    echo "Manzanas - " . PRECIO_MANZANAS . "€/kg - " . $peso_manzanas . "kg - " . number_format($coste_manzanas, 2) . "€<br>";
    echo "Uvas - " . PRECIO_UVAS . "€/kg - " . $peso_uvas . "kg - " . number_format($coste_uvas, 2) . "€<br>";

    $total = $coste_judias + $coste_patatas + $coste_tomates + $coste_manzanas + $coste_uvas;
    echo "<b>Total: " . number_format($total, 2) . "€</b><br><br>";

    echo "¡Gracias por su compra!";
?>
