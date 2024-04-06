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
$comeco = 1;
$fim = 11;
for ($j = 0; $j < 5; $j++) {
    for ($i = $comeco; $i < $fim; $i++)
        $operacao += $matriz[$i][$j];
    $comeco += 1;
    $fim -= 1;
}
if ($operacaoChar == 'M')
    $operacao /= 30;
echo number_format($operacao, 1, '.', '') . "\n";
