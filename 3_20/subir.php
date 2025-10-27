<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir archivo</title>
</head>
<body>
    <h1>Subir un archivo</h1>
    <form action="confirmar.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" name="archivo" id="archivo" required>
        <br><br>
        <input type="submit" value="Subir archivo">
    </form>

    <p><a href="index.php">Volver al inicio</a></p>
</body>
</html>
