<?php
$C = readline();
for ($i = 0; $i < $C; $i++) {
    $palavra = readline();
    $palavra = preg_replace("/(?![a-z])./", "", $palavra);
    $palavra = strrev($palavra);
    echo "$palavra\n";
}