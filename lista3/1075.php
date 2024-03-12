<?php
$N = intval(readline());
for ($i = 2; $i < 10000; $i++) {
    if ($i % $N == 2)
        echo "$i\n";
}
