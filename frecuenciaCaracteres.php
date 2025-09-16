<?php
// Cuenta la frecuencia de cada carácter en una cadena
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i];
        if (isset($frecuencia[$char])) {
            $frecuencia[$char]++;
        } else {
            $frecuencia[$char] = 1;
        }
    }
    return $frecuencia;
}

// Ejemplo
$texto = "programacion";
$frecuencia = frecuenciaCaracteres($texto);

echo "Frecuencia de caracteres:<br>";
foreach ($frecuencia as $char => $count) {
    echo "$char: $count<br>";
}
?>
