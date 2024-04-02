<?php
$operacaoChar = readline();
$operacao = 0;
$matriz = [];
for ($i = 0; $i < 3; $i++)
    for ($j = 0; $j < 3; $j++)
        $matriz[$i][$j] = floatval(readline());
foreach
for ($i = 0; $i < 3; $i++)
    for ($j = 2; $j == $i; $j--)
        $operacao += $matriz[$i][$j];
if ($operacaoChar == 'M')
    $operacao /= 3;
echo number_format($operacao, 1, '.', '') . "\n";
