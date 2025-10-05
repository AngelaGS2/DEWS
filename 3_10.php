<?php
    function pesetas_a_euros($pesetas) {
        return $pesetas / 166.368;
    }

    function euros_a_pesetas($euros) {
        return $euros * 166.368;
    }

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
        $coste_pesetas = euros_a_pesetas($coste);

        echo "$producto - " . $precio . "€/kg - " . $peso . "kg - " 
             . number_format($coste, 2) . "€ (" . number_format($coste_pesetas, 0) . " ptas)<br>";
    }

    $total_pesetas = euros_a_pesetas($total);

    echo "Total: " . number_format($total, 2) . "€ (" . number_format($total_pesetas, 0) . " ptas)<br>";
    echo "Gracias por su compra";
?>
