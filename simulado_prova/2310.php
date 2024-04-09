<?php
$N = intval(readline());
$jogador = [];
$tentativa = [0, 0, 0];
$sucesso = [0, 0, 0];
while ($N--) {
    array_push($jogador, readline());
    list($saque, $bloqueio, $ataque) = explode(" ", readline());
    $tentativa[0] += $saque;
    $tentativa[1] += $bloqueio;
    $tentativa[2] += $ataque;
    list($saque, $bloqueio, $ataque) = explode(" ", readline());
    $sucesso[0] += $saque;
    $sucesso[1] += $bloqueio;
    $sucesso[2] += $ataque;
}
echo "Pontos de Saque: " . number_format(($sucesso[0] / $tentativa[0] * 100), 2, ".", "") . " %.\n";
echo "Pontos de Bloqueio: " . number_format(($sucesso[1] / $tentativa[1] * 100), 2, ".", "") . " %.\n";
echo "Pontos de Ataque: " . number_format(($sucesso[2] / $tentativa[2] * 100), 2, ".", "") . " %.\n";
