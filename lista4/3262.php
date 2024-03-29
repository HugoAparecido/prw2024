<?php
$N = 5;
$entrada = [];
while ($N--) {
    array_push($entrada, str_split(readline()));
}
$numeros = [
    '**** ** ** ****' => 0,
    '  *  *  *  *  *' => 1,
    '***  *****  ***' => 2,
    '***  ****  ****' => 3,
    '* ** ****  *  *' => 4,
    '****  ***  ****' => 5,
    '****  **** ****' => 6,
    '***  *  *  *  *' => 7,
    '**** ***** ****' => 8,
    '**** ****  ****' => 9
];
$numerosEntrada = [];
$i = 0;
while ($i < count($entrada[0])) {
    $array = [
        $entrada[0][$i], $entrada[0][$i + 1], $entrada[0][$i + 2],
        $entrada[1][$i], $entrada[1][$i + 1], $entrada[1][$i + 2],
        $entrada[2][$i], $entrada[2][$i + 1], $entrada[2][$i + 2],
        $entrada[3][$i], $entrada[3][$i + 1], $entrada[3][$i + 2],
        $entrada[4][$i], $entrada[4][$i + 1], $entrada[4][$i + 2]
    ];
    array_push($numerosEntrada, implode("", $array));
    $i += 4;
}
$numeroMostrado = "";
foreach ($numerosEntrada as $numero) {
    $numeroMostrado .= $numeros[$numero];
}
if (intval($numeroMostrado) % 6 == 0) {
    echo "\n";
}
print_r($numerosEntrada);
print_r($entrada);