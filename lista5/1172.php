<?php
$X = [];
for ($i = 0; $i < 10; $i++) {
    $entrada = intval(fgets(STDIN));
    $X[$i] = $entrada <= 0 ? 1 : $entrada;
}
foreach ($X as $indice => $x) {
    echo "X[$indice] = $x\n";
}
