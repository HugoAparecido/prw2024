<?php
$linha = explode(" ", readline());
$A = doubleval($linha[0]);
$B = doubleval($linha[1]);
$C = doubleval($linha[2]);
$pi = 3.14159;
echo "TRIANGULO: " . number_format(($A * $C / 2), 3, ".", "") . "\n";
echo "CIRCULO: " . number_format(($pi * ($C ** 2)), 3, ".", "") . "\n";
echo "TRAPEZIO: " . number_format((($A + $B) * $C / 2), 3, ".", "") . "\n";
echo "QUADRADO: " . number_format(($B ** 2), 3, ".", "") . "\n";
echo "RETANGULO: " . number_format(($B * $A), 3, ".", "") . "\n";