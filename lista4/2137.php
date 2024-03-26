<?php
function Ordernar($codigos)
{
    asort($codigos);
    return $codigos;
}
while ($n = intval(fgets(STDIN))) {
    $codigos = [];
    for ($i = 0; $i < $n; $i++) {
        $codigo = trim(fgets(STDIN));
        $codigos[$codigo] = $codigo;
    }
    $codOrdenado = Ordernar($codigos);
    foreach ($codOrdenado as $codigo)
        echo $codigo . "\n";
}
