<?php
$subcarpeta = "listar";
$extension_deseada = "txt";
$ruta = __DIR__ . "/" . $subcarpeta;

if (is_dir($ruta)) {
    echo "<h2>Archivos con extensión .$extension_deseada en '$subcarpeta':</h2>";
    echo "<ul>";

    $dir = opendir($ruta);

    while (($archivo = readdir($dir)) !== false) {
        if ($archivo != "." && $archivo != "..") {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            if (strtolower($extension) === strtolower($extension_deseada)) {
                $url = $subcarpeta . "/" . $archivo;
                echo "<li><a href='$url' target='_blank'>$archivo</a></li>";
            }
        }
    }

    closedir($dir);
    echo "</ul>";
} else {
    echo "<p>La carpeta '$subcarpeta' no existe.</p>";
}
?>
