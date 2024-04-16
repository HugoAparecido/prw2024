<?php
$valor = doubleval(readline());
$matriz = [];
for ($i = 0; $i < 5; $i++)
    for ($j = 0; $j < 5; $j++) {
        $valorAgora = doubleval(readline());
        if ($valor <= $valorAgora)
            echo "Valor Encontrado: " . number_format($valorAgora, 2, ".", "") . " Linha: $i Coluna: $j\n";
        $matriz[$i][$j] = $valor;
    }
