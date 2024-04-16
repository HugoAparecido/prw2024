<?php
$N = intval(readline());
while ($N--) {
    $frase = readline();
    $palavras = explode(" ", $frase);
    $palavras = array_reverse($palavras);
    for ($i = 0; $i < count($palavras); $i++) {
        $palavras[$i] = str_replace('P', 'B', $palavras[$i]);
        $palavras[$i] = str_replace('F', 'V', $palavras[$i]);
        $palavras[$i] = str_replace('T', 'D', $palavras[$i]);
        $palavras[$i] = str_replace('R', 'L', $palavras[$i]);
        $palavras[$i] = str_replace('J', 'Z', $palavras[$i]);
        $palavras[$i] = str_replace('X', 'S', $palavras[$i]);
    }
    $frase = implode(" ", $palavras);
    echo "$frase\n";
}
