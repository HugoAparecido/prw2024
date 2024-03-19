<?php
$N = intval(readline());
while ($N != 0) {
    $entrada = [];
    for ($i = 0; $i < $N; $i++) {
        $linha = readline();
        $linha = explode(" ", $linha);
        $linha = array_diff($linha, [" "]);
        $linha = implode(" ", $linha);
        array_push($entrada, $linha);
    }
    $maior = 0;
    foreach ($entrada as $linha) {
        if (strlen($linha) > $maior)
            $maior = strlen($linha);
    }
    foreach ($entrada as $linha) {
        echo $linha . "\n";
    }
    $N = intval(readline());
}
