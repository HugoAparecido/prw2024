<?php
$N = intval(readline());
$X = explode(" ", readline());
$menor = 0;
$indice = 0;
for ($i = 0; $i < $N; $i++) {
    if ($i == 0) {
        $menor = intval($X[$i]);
        $indice = $i;
    } elseif ($X[$i] < $menor) {
        $menor = intval($X[$i]);
        $indice = $i;
    }
}
echo "Menor valor: $menor\n";
echo "Posicao: $indice\n";
