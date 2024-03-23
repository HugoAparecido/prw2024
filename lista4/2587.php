<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    $palavraDuvida1 = readline();
    $palavraDuvida2 = readline();
    $palavraDuvida1 = str_split($palavraDuvida1);
    $palavraDuvida2 = str_split($palavraDuvida2);
    $palavraAdivinhar = readline();
    $palavraAdivinhar = str_split($palavraAdivinhar);
    $adivinharCaracteres = array_keys($palavraAdivinhar, "_");
    if ($palavraDuvida1[$adivinharCaracteres[0]] == $palavraDuvida2[$adivinharCaracteres[1]] || $palavraDuvida1[$adivinharCaracteres[1]] == $palavraDuvida2[$adivinharCaracteres[0]])
        $resposta = "Y\n";
    else
    $resposta = "N\n";
    echo $resposta;
}