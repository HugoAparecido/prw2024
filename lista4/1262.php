<?php
while ($R = strval(fgets(STDIN))) {
    $P = intval(readline());
    preg_match_all("/(W)|(R{1,$P})/", $R, $processos);
    $processos = count($processos[0]);
    echo $processos. "\n";
}