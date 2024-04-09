<?php
function Ordernar($codigos)
{
    asort($codigos); // odena o array em ordem crescente e mantém suas chaves
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
