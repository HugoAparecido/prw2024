<?php
$numFunc = intval(readline());
$horasTrab = intval(readline());
$valorPorHora = floatval(readline());
echo "NUMBER = $numFunc\nSALARY = U$ " . number_format($horasTrab * $valorPorHora, 2, ".", "") . "\n";