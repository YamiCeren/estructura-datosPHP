<?php
function piramide($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        echo str_repeat(" ", $filas - $i);
        echo str_repeat("*", 2 * $i - 1);
        echo "\n";
    }
}

piramide(20);
?>
