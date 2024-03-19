<?php
$N = intval(readline());
$numeros = [];
for ($i = 0; $i < $N; $i++) {
    array_push($numeros, strval(readline()));
}
foreach ($numeros as $numero) {
    $numero = str_split($numero);
    $numeroLeds = 0;
    foreach ($numero as $caractere) {
        switch ($caractere) {
            case "1":
                $numeroLeds += 2;
                break;
            case "2":
                $numeroLeds += 5;
                break;
            case "3":
                $numeroLeds += 5;
                break;
            case "4":
                $numeroLeds += 4;
                break;
            case "5":
                $numeroLeds += 5;
                break;
            case "6":
                $numeroLeds += 6;
                break;
            case "7":
                $numeroLeds += 3;
                break;
            case "8":
                $numeroLeds += 7;
                break;
            case "9":
                $numeroLeds += 6;
                break;
            case "0":
                $numeroLeds += 6;
                break;
        }
    }
    echo "$numeroLeds leds\n";
}
