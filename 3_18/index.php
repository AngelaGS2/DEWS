<?php
$subcarpeta = "listar";

$ruta = __DIR__ . "/" . $subcarpeta;

if(is_dir($ruta)){
    echo "<h2> Archivos en la carpeta '$subcarpeta':</h2>";
    echo"<ul>";

    $dir = opendir($ruta);

    while (($archivo = readdir($dir)) !== false ){
        if ($archivo != "." && $archivo != ".."){
            $url = $subcarpeta . "/" . $archivo;
            echo "<li><a href='$url' target='_blank'>$archivo</a></li>";
    }
}
closedir($dir);

echo "</ul>";
} else{
    echo "<p> La carpeta '$subcarpeta' no existe. </p>";
}
?>