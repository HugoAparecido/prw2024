<?php
$A = doubleval(readline());
$B = doubleval(readline());
$media = ($A * 3.5 + $B * 7.5) / 11;
echo "MEDIA = " . number_format($media, 5, ".", "") . "\n";