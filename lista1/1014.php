<?php
$distanciaPercorrida = intval(readline());
$combustivelGasto = floatval(readline());
echo number_format($distanciaPercorrida / $combustivelGasto, 3, ".", "") . " km/l\n";