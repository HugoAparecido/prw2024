<?php
$N = intval(readline());
$reposta = "";
while ($N--)
    $reposta .= "Ho ";
$resposta = substr($reposta, 0, -1);
echo "$resposta!\n";
