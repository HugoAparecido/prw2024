<?php
//ceil
$N = intval(readline());
while ($N != 0) {
    $entrada = [];
    for ($i = 0; $i < $N; $i++) {
        array_push($entrada, readline());
    }
    $maior = 0;
    foreach ($entrada as $linha) {
        if (strlen($linha) > $maior)
            $maior = strlen($linha);
    }
    $resposta = "\n";
    foreach ($entrada as $linha) {
        $linha = str_pad($linha, $maior, " ", STR_PAD_LEFT);
        $resposta .= $linha . "\n";
    }
    echo "$resposta";
    $N = intval(readline());
}
