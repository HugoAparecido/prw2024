<?php
$valores = explode(" ", readline());
$A = intval($valores[0]);
$B = intval($valores[1]);
$C = intval($valores[2]);
$D = intval($valores[3]);
if ($B > $C && $D > $A && ($C + $D) > ($A + $B) && $C >= 0 && $D >= 0 && ($A % 2) == 0)
    echo "Valores aceitos\n";
else
    echo "Valores nao aceitos\n";
