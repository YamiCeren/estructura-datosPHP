<?php
// Invierte los elementos de un array
function listaInvertida($array) {
    return array_reverse($array);
}

// Ejemplo
$numeros = [1, 2, 3, 4, 5];
$invertido = listaInvertida($numeros);

echo "Lista invertida: ";
foreach ($invertido as $num) {
    echo $num . " ";
}
?>
