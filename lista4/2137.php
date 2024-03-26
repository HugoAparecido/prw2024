<?php
while ($N = intval(fgets(STDIN))) {
    for ($i = 0; $i < $N; $i++)
        $numeros[$i] = readline();
    sort($numeros);
    for ($i = 0; $i < $N; $i++)
        echo strval($numeros[$i]) . "\n";
}
