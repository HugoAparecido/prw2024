<?php
$N = intval(readline());
for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 == 0)
        echo "$i^2 = " . ($i ** 2) . "\n";
}
