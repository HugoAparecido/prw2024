<?php
$T = intval(readline());
$numeroColocar = 0;
$resposta = [];
for ($i = 0; $i < 1000; $i++) {
    if ($numeroColocar > $T-1)
        $numeroColocar = 0;
    $resposta[] = $numeroColocar++;
}
foreach ($resposta as $indice => $x)
    echo "N[$indice] = $x\n";
