<?php
$nome = readline();
$salarioFixo = doubleval(readline());
$totalVendasMes = doubleval(readline());
echo "TOTAL = R$ " . number_format($salarioFixo + (0.15 * $totalVendasMes), 2, ".", "") . "\n";