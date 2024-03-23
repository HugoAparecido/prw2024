<?php
$entrada = readline();
$n = "";
for ($i = 0; $i < strlen($entrada); $i++) {
    $letra = $entrada[$i];
    if (strpos("aeiou", $letra) !== false)
        $n .= $letra;
}
if ($n == strrev($n))
    echo "S\n";
else
    echo "N\n";
