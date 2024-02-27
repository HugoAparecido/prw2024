<?php
$N = intval(readline());
$NxN = array_pad([], $N-1, array_pad([], $N-1, 0));
$Q = intval(readline());
$i=0;
$interacao =[];
while($Q>=$i){
    array_push($interacao,explode(" ", intval(readline())));
    $i++;
}
print_r($NxN);
print_r($interacao);