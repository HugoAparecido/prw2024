<?php
$linhaConsiderar = intval(readline());
$operacaoChar = readline();
$operacao = 0;
$matriz = [];
for ($i = 0; $i < 12; $i++)
    for ($j = 0; $j < 12; $j++)
        $matriz[$i][$j] = floatval(readline());
foreach ($matriz[$linhaConsiderar] as $numero)
    $operacao += $numero;
if ($operacaoChar == 'M')
    $operacao /= 12;
echo number_format($operacao, 1, '.', '') . "\n";
