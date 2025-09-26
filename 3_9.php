<?php
$precio_kg = array(
    "Judias" => "3.50",
    "Patatas" => "0.40",
    "Tomates" => "1.00",
    "Manzanas" => "1.20",
    "Uvas" => "2.50",
);
$lista_compra = array(
    "Judias" => "2.40",
    "Patatas" => "5.20",
    "Tomates" => "0",
    "Manzanas" => "2",
    "Uvas" => "1",
);


foreach($precio_kg as $key => $valor){
 
    echo $key . " - " . $valor . "<br>" ;

}
foreach($lista_compra as $valor){
 
    echo  $valor;
}


?>
