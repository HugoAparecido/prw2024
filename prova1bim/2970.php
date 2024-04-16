<?php
$N = intval(readline());
while ($N != 0) {
    list($divX, $divY) = explode(" ", readline());
    $divX = intval($divX);
    $divY = intval($divY);
    for ($i = 0; $i < $N; $i++) {
        list($x, $y) = explode(" ", readline());
        $x = intval($x);
        $y = intval($y);
        if ($x == $divX || $y == $divY)
            echo "divisa\n";
        elseif ($x > $divX && $y > $divY)
            echo "NE\n";
        elseif ($x < $divX && $y > $divY)
            echo "NO\n";
        elseif ($x < $divX && $y < $divY)
            echo "SO\n";
        elseif ($x > $divX && $y < $divY)
            echo "SE\n";
    }
    $N = intval(readline());
}
