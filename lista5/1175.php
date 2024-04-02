<?php
$N = [];
$NReverso = [];
for ($i = 0; $i < 20; $i++)
    $N[$i] = intval(fgets(STDIN));
for ($i = 19; $i >= 0; $i--)
    $NReverso[] = $N[$i];
foreach ($NReverso as $indice => $n) {
    echo "N[$indice] = $n\n";
}
