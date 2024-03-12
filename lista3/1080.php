<?php
$posicao = 0;
$numero = 0;
for ($i = 1; $i <= 100; $i++) {
    $valor = intval(readline());
    if ($numero < $valor) {
        $numero = $valor;
        $posicao = $i;
    }
}
echo "$numero\n";
echo "$posicao\n";
