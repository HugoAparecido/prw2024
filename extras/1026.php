<?php
while ($N = fgets(STDIN)) {
    list($A, $B) = explode(" ", $N);
    $A = intval($A);
    $B = intval($B);
    echo ($A ^ $B) . "\n";
}