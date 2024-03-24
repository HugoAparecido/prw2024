<?php
while ($N = intval(fgets(STDIN))) {
    $codigos = [];
    for ($i = 0; $i < $N; $i++)
        array_push($codigos, readline());
    sort($codigos, SORT_NUMERIC);
    foreach ($codigos as $codigo) {
        echo $codigo . "\n";
    }
}