<?php
$par = [];
$impar = [];
for ($i = 0; $i < 15; $i++) {
    $entrada = intval(fgets(STDIN));
    if ($entrada % 2 == 0)
        $par[] = $entrada;
    else
        $impar[] = $entrada;
    if (count($par) == 5) {
        foreach ($par as $indice => $num)
            echo "par[$indice] = $num\n";
        $par = [];
    }
    if (count($impar) == 5) {
        foreach ($impar as $indice => $num)
            echo "impar[$indice] = $num\n";
        $impar = [];
    }
}
if (count($impar) != 0) {
    foreach ($impar as $indice => $num)
        echo "impar[$indice] = $num\n";
}
if (count($par) != 0) {
    foreach ($par as $indice => $num)
        echo "par[$indice] = $num\n";
}
