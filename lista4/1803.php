<?php
$entrada = [];
$saida = [];
array_push($entrada, str_split(readline()));
array_push($entrada, str_split(readline()));
array_push($entrada, str_split(readline()));
array_push($entrada, str_split(readline()));
for($i=1; $i<count($entrada)-1;$i++){
    array_push($saida, (($entrada[1][$i]*$entrada[2][$i]+$entrada[3][$i])%257));
}
foreach ($saida as $saida){
    echo $saida."\n";
}