<?php
$N = intval(readline());
$letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$resposta = 0;
while ($N--) {
    list($stringInicial, $stringFinal) = explode(" ", readline());
    $stringInicial = str_split($stringInicial);
    $stringFinal = str_split($stringFinal);
    for ($i = 0; $i < count($stringInicial); $i++) {
        $letra = array_search($stringInicial[$i], $letras); // pesquisa um valor e retorna a posição dele em um array
        while ($stringInicial[$i] != $stringFinal[$i]) {
            $resposta++;
            if ($letra == 25)
                $letra = 0;
            else
                $letra++;
            $stringInicial[$i] = $letras[$letra];
        }
    }
    echo "$resposta\n";
    $resposta = 0;
}