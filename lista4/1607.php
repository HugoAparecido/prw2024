<?php
$N = intval(readline());
$resposta = 0;
while ($N--) {
    list($stringInicial, $stringFinal) = explode(" ", readline());
    for ($i = 0; $i < min(strlen($stringInicial), strlen($stringFinal)); $i++) {
        $resposta += abs(ord($stringInicial[$i])-ord($stringFinal[$i]));
    }
    echo "$resposta\n";
    $resposta = 0;
}