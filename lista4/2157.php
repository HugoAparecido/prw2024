<?php
$N = intval(readline());
while ($N--) {
    $espelho = "";
    list($A, $B) = explode(" ", readline());
    while ($B >= $A)
        $espelho .= $A++;
    $espelho .= strrev($espelho); // reverte uma string, ex: hugo vira oguh
    echo "$espelho\n";
}