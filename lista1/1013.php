<?php
$entrada = explode(" ", readline());
$A = intval($entrada[0]);
$B = intval($entrada[1]);
$C = intval($entrada[2]);
if ($A > $B)
    $maior = $A;
else
    $maior = $B;
if ($maior < $C)
    $maior = $C;
echo "$maior eh o maior\n";