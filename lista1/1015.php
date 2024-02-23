<?php
$linha1 = explode(" ", readline());
$linha2 = explode(" ", readline());
$x1 = floatval($linha1[0]);
$y1 = floatval($linha1[1]);
$x2 = floatval($linha2[0]);
$y2 = floatval($linha2[1]);
echo number_format(sqrt(($x2 - $x1)**2+($y2 - $y1)**2), 4, ".", "")."\n";