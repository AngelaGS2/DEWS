<?php
$directorio_subida = __DIR__ . "/descargas/";
$archivo_subido = $directorio_subida . basename($_FILES["archivo"]["name"]);

if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo_subido)) {
    $nombre = basename($_FILES["archivo"]["name"]);
    $tamano = filesize($archivo_subido);
    $extension = pathinfo($nombre, PATHINFO_EXTENSION);
} else {
    die("<p>Error al subir el archivo.</p><p><a href='subir.php'>Volver</a></p>");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Archivo subido</title>
</head>
<body>
    <h1>Archivo subido correctamente</h1>

    <p><strong>Nombre:</strong> <?= htmlspecialchars($nombre) ?></p>
    <p><strong>Extensión:</strong> <?= htmlspecialchars($extension) ?></p>
    <p><strong>Tamaño:</strong> <?= round($tamano / 1024, 2) ?> KB</p>

    <p><a href="subir.php">Subir otro archivo</a></p>
    <p><a href="listar.php">Ver archivos subidos</a></p>
</body>
</html>
