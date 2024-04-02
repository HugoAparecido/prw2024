<?php
$fibonnachi = [0, 1];
$num1 = 0;
$num2 = 1;
for ($i = 0; $i < 100; $i++) {
    array_push($fibonnachi, $num1 + $num2);
    $moderador = $num1 + $num2;
    $num1 = $num2;
    $num2 = $moderador;
}
$N = intval(readline());
$entrada = [];
for ($i = 0; $i < $N; $i++)
    $entrada[] = intval(readline());
foreach ($entrada as $numero)
    echo "Fib($numero) = " . $fibonnachi[$numero] . "\n";
