<?php
while ($n = fgets(STDIN)) {
    $numAsteriscos = (int)$n;
    $stringResposta = "";
    for ($i = 0; $i <= $numAsteriscos; $i++) {
        if ($i % 2 != 0) {
            for ($c = 0; $c < (($numAsteriscos - $i) / 2); $c++) {
                $stringResposta .= " ";
            }
            for ($c = 0; $c < $i; $c++) {
                $stringResposta .= "*";
            }
            $stringResposta .= "\n";
        }
    }
    for ($c = 0; $c < (($numAsteriscos - 1) / 2); $c++) {
        $stringResposta .= " ";
    }
    $stringResposta .= "*";
    $stringResposta .= "\n";
    for ($c = 0; $c < (($numAsteriscos - 3) / 2); $c++) {
        $stringResposta .= " ";
    }
    $stringResposta .= "***";
    $stringResposta .= "\n\n";
    echo "$stringResposta";
}
