<?php
    echo "Producto - Precio/kg - Peso - Precio<br>";

    $precio_kg = array(
        "Judías" => 3.50,
        "Patatas" => 1.20,
        "Tomates" => 2.35,
        "Manzanas" => 1.80,
        "Uvas" => 2.10
    );

    $lista_compra = array(
        "Judías" => 1.21,
        "Patatas" => 2.35,
        "Tomates" => 1.50,
        "Manzanas" => 1.75,
        "Uvas" => 0.80
    );

    $total = 0;

    foreach ($lista_compra as $producto => $peso) {
        $precio = $precio_kg[$producto];
        $coste = $precio * $peso;
        $total += $coste;

        echo "$producto - " . $precio . "€/kg - " . $peso . "kg - " . number_format($coste, 2) . "€<br>";
    }

    echo "<b>Total: " . number_format($total, 2) . "€</b><br><br>";
    echo "¡Gracias por su compra!";
?>

