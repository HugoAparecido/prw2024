<?php
$linha1 = readline();
$linha2 = readline();
$linha1 = explode(" ", $linha1);
$linha2 = explode(" ", $linha2);
echo "VALOR A PAGAR: R$ " . number_format(intval($linha1[1]) * floatval($linha1[2]) + intval($linha2[1]) * floatval($linha2[2]), 2, ".", "") . "\n";