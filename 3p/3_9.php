<?php
echo "Producto - Precio/kg - Peso - Precio <br>";

$precio_kg = array(
    "Judias" => "3.50",
    "Patatas" => "1.20",
    "Tomates" => "2.35",
    "Manzanas" => "1.80",
    "Uvas" => "2.10",
);
$lista_compra = array(
    "Judias" => "2.40",
    "Patatas" => "5.20",
    "Tomates" => "0",
    "Manzanas" => "2",
    "Uvas" => "1",
);

$total = 0; 

foreach($lista_compra as $producto => $peso){
    $precio = $precio_kg[$producto];
    $coste = $precio * $peso;
    $total += $coste;

    echo  "$producto - " . $precio . "€/kg - " . $peso . "kg - " . number_format($coste, 2) . "€<br>";

}

echo "Total: " . number_format($total, 2) . "€<br>";
echo "Gracias por su compra";

?>
