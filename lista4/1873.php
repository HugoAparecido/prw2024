<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    list($R, $S) = explode(" ", readline());
    if ($R == $S) {
        echo "empate\n";
    }
}
