<?php
list($N, $Q) = explode(" ", readline());
$N = intval($N);
$Q = intval($Q);
$NxN = array_pad([], $N - 1, array_pad([], $N - 1, 0));
for ($i = 0; $i < $Q; $i++) {
    $interacao[] = explode(" ", readline());
    switch ($interacao[0]) {
        case 1:
            for ($j = 0; $j < $N; $j++)
                $NxN[$interacao[1]][$j] = $interacao[2];
            break;
        case 2:
            for ($i = 0; $i < $N; $i++)
                $NxN[$i][$interacao[1]] = $interacao[2];
            break;
        case 3:
            echo "";
            break;
        case 4:
            break;
    }
}
print_r($NxN);
