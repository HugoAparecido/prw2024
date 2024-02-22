<?php
$raio = doubleval(readline());
$pi = 3.14159;
echo "VOLUME = " . number_format((4.0 / 3) * $pi * ($raio ** 3), 3, ".", "") . "\n";