<?php
while (true) {
    $R = readline();
    if ($R == false)
        break;
    $P = intval(readline());
    for ($i = $P; $i > 0; $i--)
        $R = str_replace(str_repeat('R', $i), 'W', $R);
    echo strlen($R) . "\n";
}
