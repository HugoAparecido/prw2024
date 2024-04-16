<?php
$VMedia = doubleval(readline());
$distância = doubleval(readline());
$consumoMedio = doubleval(readline());
$tempo = $distância / $VMedia;
$consumoFinal = $distância / $consumoMedio;
echo "Total horas: " . number_format($tempo, 2, '.', "") . "\n";
echo "Total combustivel: " . number_format($consumoFinal, 2, '.', "") . "\n";
