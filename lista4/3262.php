<?php
$N = 5;
$entrada = [[], [], [], [], []];
while ($N--) {
    array_push($entrada[$N-1], str_split(readline()));
}
$colunas = [];
for($i=0;$i<count($entrada[0]);$i++){
    $array = [$entrada[0][0], $entrada[0][1],$entrada[0][2],$entrada[0][3],$entrada[0][4]];
    array_push($colunas, implode("", $array));
}
echo $colunas[0];
?>
