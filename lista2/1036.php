<?php
$valores = explode(' ', readline());
$A = floatval($valores[0]);
$B = floatval($valores[1]);
$C = floatval($valores[2]);
$delta = $B ** 2 - 4 * $A * $C;
if ($delta < 0 || 2 * $A == 0) {
    echo "Impossivel calcular\n";
} else {
    echo "R1 = " . number_format((-$B + ($delta ** (1 / 2))) / (2 * $A), 5, '.', '') . "\n";
    echo "R2 = " . number_format((-$B - ($delta ** (1 / 2))) / (2 * $A), 5, '.', '') . "\n";
}
