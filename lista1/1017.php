<?php
$tempo = intval(readline());
$velocidade = intval(readline());
echo number_format($tempo * $velocidade / 12, 3, ".", "") . "\n";