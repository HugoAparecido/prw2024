<?php
$X = doubleval(readline());
$resposta = [];
for ($i = 0; $i < 100; $i++) {
    $resposta[] = $X;
    $X /= 2;
}
foreach ($resposta as $indice => $x)
    echo "N[$indice] = " . number_format($x, 4, '.', '') . "\n";
