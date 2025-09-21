<?php
for ($i = 0; $i < 24 ; $i++){
    for ($y = 0; $y < 60; $y += 15){
        if($i < 12){
    echo "Son las: " . $i . " h y ". $y . " minutos AM" ."<br>";
        } else {
        echo "Son las: " . $i . " h y ". $y . " minutos PM" ."<br>";
        }
    }
}
?>