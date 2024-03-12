<?php
$X = intval(readline());
$Y = intval(readline());
$soma = 0;
$Y++;
while ($Y < $X) {
    if ($Y % 2 != 0)
        $soma += $Y;
    $Y++;
}
echo $soma . "\n";
