<?php
$operacaoChar = readline();
$operacao = 0;
$matriz = [];
for ($i = 0; $i < 12; $i++)
    for ($j = 0; $j < 12; $j++)
        $matriz[$i][$j] = doubleval(readline());
/*foreach ($matriz as $linha) {
    foreach ($linha as $coluna)
        echo "$coluna ";
    echo "\n";
}*/
$aux1 = 11;
$aux2 = 1;
for ($i = 11; $i > 6; $i--) {
    for ($j = $aux2; $j < $aux1; $j++)
        $operacao += $matriz[$i][$j];
    $aux1 -= 1;
    $aux2 += 1;
}
if ($operacaoChar == 'M')
    $operacao /= 30;
echo number_format($operacao, 1, '.', '') . "\n";