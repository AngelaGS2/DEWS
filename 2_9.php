<?php
define("PRECIO_JUDIAS", 3.50);
define("PRECIO_PATATAS", 0.40);
define("PRECIO_TOMATES", 1.00);
define("PRECIO_MANZANAS", 1.20);
define("PRECIO_UVAS", 2.50);

echo "Productos que cuestan menos de 1.50 euros el kg" . "<br>";

if (PRECIO_JUDIAS < 1.50 ){
    echo "Judías" . "<br>";
}
if (PRECIO_PATATAS< 1.50 ){
    echo "Patatas" . "<br>";
}
if (PRECIO_TOMATES < 1.50 ){
    echo "Tomates" . "<br>"; 
}
if (PRECIO_MANZANAS < 1.50 ){
    echo "Manzanas" . "<br>";
}
if (PRECIO_UVAS< 1.50 ){
    echo "Uvas" . "<br>";
}

