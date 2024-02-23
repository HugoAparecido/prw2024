<?php
$N = intval(readline());
$cedulas = [100, 50, 20, 10, 5, 2, 1];
$resto = $N;
function CalcularNumCedulas($valor, $cedula)
{
    if ($valor >= $cedula) {
        echo intval($valor / $cedula) . " nota(s) de R$ " . number_format($cedula, 2, ",", "") . "\n";
        return $valor % $cedula;
    } else {
        echo "0 nota(s) de R$ " . number_format($cedula, 2, ",", "") . "\n";
        return $valor;
    }
}
echo "$N\n";
foreach ($cedulas as $nota) {
    $resto = CalcularNumCedulas($resto, $nota);
}