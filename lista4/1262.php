<?php
while ($R = strval(fgets(STDIN))) {
    $P = intval(readline());
    $R = str_split($R);
    $processo = count(array_keys($R, "W"));
    $R=implode("", $R);
    $R = explode("W", $R);
    // preg_match_all("/(W)|(R{1,$P})/", $R, $processos);
    // $processos = count($processos[0]);
    echo $processos. "\n";
}