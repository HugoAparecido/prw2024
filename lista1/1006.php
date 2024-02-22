<?php
$A = doubleval(readline());
$B = doubleval(readline());
$C = doubleval(readline());
$media = ($A * 2 + $B * 3 + $C * 5) / 10;
echo "MEDIA = " . number_format($media, 1, ".", "") . "\n";