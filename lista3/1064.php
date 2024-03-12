<?php
$positivos = 0;
$media = 0;
for ($i = 0; $i < 6; $i++) {
    $valorAtual = floatval(readline());
    if ($valorAtual >= 0) {
        $positivos++;
        $media += $valorAtual;
    }
}
$media = $media / $positivos;
echo "$positivos valores positivos\n";
echo number_format($media, 1, ".", "") . "\n";
