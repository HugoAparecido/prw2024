<?php
$entrada = [];
array_push($entrada, readline());
array_push($entrada, readline());
array_push($entrada, readline());
array_push($entrada, readline());
$valorColuna = [];
for ($i = 0; $i < strlen($entrada[0]); $i++) {
    $f = intval($entrada[0][$i]) * 1000;
    $f += intval($entrada[1][$i]) * 100;
    $f += intval($entrada[2][$i]) * 10;
    $f += intval($entrada[3][$i]);
    $valorColuna[] = $f;
}
for ($i = 1; $i < count($valorColuna) - 1; $i++) {
    echo chr(($valorColuna[0] * $valorColuna[$i] + $valorColuna[count($valorColuna) - 1]) % 257);
}
echo "\n";