<?php
// Suma todos los números pares en un array
function sumaPares($array) {
    $suma = 0;
    foreach ($array as $num) {
        if ($num % 2 === 0) {
            $suma += $num;
        }
    }
    return $suma;
}

// Ejemplo
$numeros = [1, 2, 3, 4, 5, 6];
echo "Suma de pares: " . sumaPares($numeros);
?>
