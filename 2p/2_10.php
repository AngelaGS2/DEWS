<?php
$frutas = ["Judías", "Patatas" , "Tomates", "Manzanas" , "Uvas"];
$precios = [3.50,0.40,1.00,1.20,2.50];

for ($i = 0; $i < 5; $i++){
    for($y = 0; $y < 5; $y++){
        if($i != $y){
            if($precios[$i] < $precios[$y]){
                echo $frutas[$i] . " es más barato que " . $frutas[$y] . "<br>";
            } else if ($precios[$i] > $precios[$y]){
                echo $frutas[$i] . " es más caro que " . $frutas[$y] . "<br>";
            } else {
                echo $frutas[$i] . " y " . $frutas[$y] . " cuestan lo mismo" . "<br>";
            }
        }
    }
}
