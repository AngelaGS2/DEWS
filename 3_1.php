<?php
function mostrar_impares (){
    $impares = [];
    $cadena =[0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($i = 0; $i < count($cadena); $i++){
        if( $cadena[$i] % 2 == 0){
           $impares == $cadena[$i];
        }
    } 
    return impares;
}
echo "A quien madruga dios le ayuda " . mostrar_impares(); 
?>
