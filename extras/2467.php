<?php
list($N, $Q) = explode(" ", readline());
$N = intval($N);
$Q = intval($Q);
$NxN = array_pad([], $N - 1, array_pad([], $N - 1, 0));
for ($i = 0; $i < $Q; $i++) {
    array_push($interacao, explode(" ", intval(readline())));
    if (intval($interacao[0]) == 1) {
        $NxN[intval($interacao[1])] = array_fill_keys($NxN[intval($interacao[1])], intval($interacao[2]));
    }
    if (intval($interacao[0]) == 2) {
        $NxN[intval($interacao[1])] = array_fill_keys($NxN[intval($interacao[1])], intval($interacao[2]));
    }
}
print_r($NxN);