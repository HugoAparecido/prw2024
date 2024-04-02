<?php
$N = [];
$entrada = intval(readline());
for ($i = 0; $i < 10; $i++) {
    $N[$i] = $entrada;
    $entrada *= 2;
}
foreach($N as $indice=>$n){
    echo "N[$indice] = $n\n";
}