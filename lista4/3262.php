<?php
$N = 5;
$entrada = [];
while ($N--) {
    array_push($entrada, str_split(readline()));
}
$entrada = array_chunk($entrada, 4);
foreach($entrada as $numero)
foreach ($numero as $linha){
foreach ($linha as $coluna)
    echo($coluna);
echo "\n";}