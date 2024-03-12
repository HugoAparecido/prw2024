<?php
$valor = intval(readline());
$i = 0;
$qtd_impar = 0;
while ($qtd_impar < 6) {
    if (($valor + $i) % 2 != 0) {
        echo $valor + $i . "\n";
        $qtd_impar++;
    }
    $i++;
}
