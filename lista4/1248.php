<?php
function insertionSort(&$array, $tamanho)
{
    for ($i = 1; $i < $tamanho; ++$i) {
        $tmp = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $tmp < $array[$j]) {
            $array[$j + 1] = $array[$j];
            --$j;
        }
        $array[$j + 1] = $tmp;
    }
}
$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; ++$i) {
    $precisaComer = array_fill(0, 26, 1);
    $naoEstaDieta = array_fill(0, 26, 0);
    $dieta = rtrim(fgets(STDIN), "\n"); //tira os espaços antes e depois dos caracteres
    $dietatamanho = strlen($dieta);
    $jaComeu = rtrim(fgets(STDIN), "\n");
    $jaComeutamanho = strlen($jaComeu);
    $jaComeu .= rtrim(fgets(STDIN), "\n");
    $jaComeutamanho = strlen($jaComeu);
    for ($j = 0; $j < $dietatamanho; ++$j) {
        $naoEstaDieta[ord($dieta[$j]) - ord('A')] = 1;
    }
    $cheater = 0;
    for ($j = 0; $j < $jaComeutamanho && !$cheater; ++$j) {
        $k = ord($jaComeu[$j]) - ord('A');

        if (!($naoEstaDieta[$k] && $precisaComer[$k])) {
            $cheater = 1;
        } else {
            $precisaComer[$k] = 0;
        }
    }
    if ($cheater) {
        echo "CHEATER\n";
    } else {
        insertionSort($dieta, $dietatamanho);
        $jantar = "";
        for ($j = 0; $j < $dietatamanho; ++$j) {
            if ($precisaComer[ord($dieta[$j]) - ord('A')]) {
                $jantar .= $dieta[$j];
            }
        }

        echo $jantar . "\n";
    }
}