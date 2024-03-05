<?php
$entrada = floatval(readline());
if ($entrada >= 0 && $entrada <= 25)
    echo "Intervalo [0,25]\n";
elseif ($entrada > 25 && $entrada <= 50)
    echo "Intervalo (25,50]\n";
elseif ($entrada > 50 && $entrada <= 75)
    echo "Intervalo (50,75]\n";
elseif ($entrada > 75 && $entrada <= 100)
    echo "Intervalo (75,100]\n";
else
    echo "Fora de intervalo\n";
