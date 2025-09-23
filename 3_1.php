<?php
function mostrar_impares (){
    $cadena ="A quien amdruga dios le ayuda";
    $impares = "";
    $longitud = strlen($cadena);
    for ($i = 0; $i < $longitud; $i++){
        if( $i% 2 != 0){
           $impares .= $cadena[$i];
        }
    } 
    return $impares;
}
echo "Cáracteres en posición impar 'A quien madruga dios le ayuda': " . mostrar_impares(); 
?>
