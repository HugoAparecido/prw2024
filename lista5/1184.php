<?php
$operacaoChar = readline();
$operacao = 0;
$matriz = [];
for ($i = 0; $i < 12; $i++)
    for ($j = 0; $j < 12; $j++)
        $matriz[$i][$j] = floatval(readline());
/*foreach ($matriz as $linha) {
    foreach ($linha as $coluna)
        echo "$coluna ";
    echo "\n";
}*/
for ($i = 1; $i < 12; $i++)
    for ($j = 0; $j < $i; $j++)
        $operacao += $matriz[$i][$j];
if ($operacaoChar == 'M')
    $operacao /= 66;
echo number_format($operacao, 1, '.', '') . "\n";
