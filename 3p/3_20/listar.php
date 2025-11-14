<?php
$carpeta = __DIR__ . "/descargas";
$archivos = [];

if (is_dir($carpeta)) {
    $dir = opendir($carpeta);

    while (($archivo = readdir($dir)) !== false) {
        if ($archivo != "." && $archivo != "..") {
            $ruta = $carpeta . "/" . $archivo;
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $tamano = filesize($ruta);
            $archivos[] = [
                "nombre" => $archivo,
                "extension" => $extension,
                "tamano" => $tamano
            ];
        }
    }

    closedir($dir);
    sort($archivos);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de archivos</title>
</head>
<body>
    <h1>Archivos disponibles en la hemeroteca</h1>

    <?php if (!empty($archivos)): ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nombre</th>
                <th>Extensión</th>
                <th>Tamaño (KB)</th>
                <th>Descargar</th>
            </tr>
            <?php foreach ($archivos as $a): ?>
                <tr>
                    <td><?= htmlspecialchars($a["nombre"]) ?></td>
                    <td><?= htmlspecialchars($a["extension"]) ?></td>
                    <td><?= round($a["tamano"] / 1024, 2) ?></td>
                    <td><a href="descargas/<?= urlencode($a["nombre"]) ?>" download>Descargar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hay archivos subidos.</p>
    <?php endif; ?>

    <p><a href="subir.php">Subir un nuevo archivo</a></p>
    <p><a href="index.php">Volver al inicio</a></p>
</body>
</html>
