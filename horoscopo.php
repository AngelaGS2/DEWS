<?php
if (isset($_POST['signo']) && $_POST['signo'] != "") {
    $signo = $_POST['signo'];
    echo "Has seleccionado el signo: " . htmlspecialchars($signo);
} else {
    echo "No has seleccionado ningún signo.";
}
?>
