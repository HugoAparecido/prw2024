<?php
$A = [];
for ($i = 0; $i < 100; $i++) {
    $A[$i] = readline();
}
foreach ($A as $indice => $a) {
    if ($a <= 10)
        echo "A[$indice] = " . number_format($a, 1, '.', '') . "\n";
}
