<?php
$C = readline();
for ($i = 0; $i < $C; $i++) {
    $resposta = "";
    $palavra = str_split(trim(readline()));
    foreach ($palavra as $letra)
        if (ctype_lower($letra))
            $resposta .= $letra;
    $resposta = strrev($resposta);
    echo "$resposta\n";
}