<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Piedra, Papel o Tijera</title>
</head>
<body>
    <h2>Juego: Piedra, Papel o Tijera</h2>

    <?php
    $ganadas = isset($_REQUEST["ganadas"]) ? $_REQUEST["ganadas"] : 0;
    $empatadas = isset($_REQUEST["empatadas"]) ? $_REQUEST["empatadas"] : 0;
    $perdidas = isset($_REQUEST["perdidas"]) ? $_REQUEST["perdidas"] : 0;

    if (isset($_POST["jugada"])) {
        $jugador = $_POST["jugada"];
        $opciones = array("piedra", "papel", "tijera");
        $maquina = $opciones[rand(0, 2)];

        echo "Tú elegiste: <strong>$jugador</strong><br>";
        echo "La máquina eligió: <strong>$maquina</strong><br>";

        if ($jugador == $maquina) {
            echo "<strong>Empate.</strong><br>";
            $empatadas++;
        } elseif (
            ($jugador == "piedra" && $maquina == "tijera") ||
            ($jugador == "papel" && $maquina == "piedra") ||
            ($jugador == "tijera" && $maquina == "papel")
        ) {
            echo "<strong>¡Has ganado!</strong><br>";
            $ganadas++;
        } else {
            echo "<strong>Has perdido.</strong><br>";
            $perdidas++;
        }
    }
    ?>
    <h3>Elige tu jugada</h3>
    <form method="post">
        <input type="radio" name="jugada" value="piedra" required> Piedra<br>
        <input type="radio" name="jugada" value="papel"> Papel<br>
        <input type="radio" name="jugada" value="tijera"> Tijera<br><br>

        <input type="hidden" name="ganadas" value="<?= $ganadas ?>">
        <input type="hidden" name="empatadas" value="<?= $empatadas ?>">
        <input type="hidden" name="perdidas" value="<?= $perdidas ?>">

        <input type="submit" value="Jugar">
    </form>

    <h3>Marcador</h3>
    <p>Ganadas: <?= $ganadas ?></p>
    <p>Empatadas: <?= $empatadas ?></p>
    <p>Perdidas: <?= $perdidas ?></p>
</body>
</html>
