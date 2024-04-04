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
for ($i = 0; $i < 5; $i++)
    for ($j = 10 - $i; $j > $i; $j--)
        $operacao += $matriz[$i][$j];
if ($operacaoChar == 'M')
    $operacao /= 30;
echo number_format($operacao, 1, '.', '') . "\n";