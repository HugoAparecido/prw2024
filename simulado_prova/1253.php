<?php
$N = intval(readline());
$letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
while ($N--) {
    $resposta = "";
    $CT = readline();
    $letraPos = intval(readline());
    $CT = str_split($CT);
    foreach ($CT as $letra) {
        $local = array_search($letra, $letras);
        $local -= $letraPos;
        if ($local < 0)
            $local = 26 + $local;
        $resposta .= $letras[$local];
    }
    echo "$resposta\n";
}
