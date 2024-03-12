<?php
$qtd = intval(readline());
$dentro = 0;
$fora = 0;
for ($i = 0; $i < $qtd; $i++) {
    $valor = intval(readline());
    if (10 <= $valor && $valor <= 20)
        $dentro++;
    else
        $fora++;
}
echo "$dentro in\n";
echo "$fora out\n";