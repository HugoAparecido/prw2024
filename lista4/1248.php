<?php
function array_diff_multi($array1, $array2)
{
    $diff = array();
    foreach ($array1 as $value) {
        $key = array_search($value, $array2);
        if ($key !== false) {
            unset($array2[$key]);
        } else {
            $diff[] = $value;
        }
    }
    return $diff;
}
function ImprovisoSort(&$array, $tamanho)
{
    for ($i = 1; $i < $tamanho; ++$i) {
        $tmp = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $tmp < $array[$j]) {
            $array[$j + 1] = $array[$j];
            --$j;
        }
        $array[$j + 1] = $tmp;
    }
}
$N = intval(readline());
while ($N--) {
    $alimentosDieta = str_split(readline());
    $cafeManha = str_split(readline());
    $almoco = str_split(readline());
    $total = array_merge($cafeManha, $almoco);
    $falta = array_diff_multi($alimentosDieta, $total);
    ImprovisoSort($falta, count($falta));
    if (count(array_merge($total, $falta)) == count($alimentosDieta))
        echo implode($falta) . "\n";
    else
        echo "CHEATER\n";
}