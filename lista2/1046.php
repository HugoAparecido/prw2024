<?php
list($hInicio, $htermino) = explode(' ', readline());
$horaDuracao = 0;
if ($hInicio == $htermino)
    $horaDuracao = 24;
elseif ($hInicio > $htermino)
    $horaDuracao = 24 - $hInicio + $htermino;
else
    $horaDuracao = $htermino - $hInicio;
echo "O JOGO DUROU $horaDuracao HORA(S)\n";