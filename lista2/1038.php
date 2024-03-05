<?php
$entrada = explode(" ", readline());
$codigo = intval($entrada[0]);
$quantidade = intval($entrada[1]);
$tabela_item = [
    [1, 4],
    [2, 4.5],
    [3, 5],
    [4, 2],
    [5, 1.5]
];
foreach($tabela_item as $item){
    if($item[0]==$codigo){
        echo "Total: R$ ".number_format(($quantidade*$item[1]), 2, '.', '')."\n";
    }
}