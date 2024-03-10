<?php
list($A, $B, $C) = explode(' ', readline());
$maior = $A > $B ? ($A > $C ? $A : $C) : ($B > $C ? $B : $C);
if ($A == $maior)
    $A = $maior;
elseif ($B == $maior) {
    $B = $A;
    $A = $maior;
} elseif ($C == $maior) {
    $C = $A;
    $A = $maior;
}
if ($A >= ($B + $C))
    echo "NAO FORMA TRIANGULO\n";
elseif ($A ** 2 == $B ** 2 + $C ** 2)
    echo "TRIANGULO RETANGULO\n";
elseif ($A ** 2 > $B ** 2 + $C ** 2)
    echo "TRIANGULO OBTUSANGULO\n";
elseif ($A ** 2 < $B ** 2 + $C ** 2)
    echo "TRIANGULO ACUTANGULO\n";
if ($A == $B && $A == $C && $B == $C)
    echo "TRIANGULO EQUILATERO\n";
elseif ($A == $B || $B == $C || $A == $C)
    echo "TRIANGULO ISOSCELES\n";