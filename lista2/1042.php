<?php
list($N1, $N2, $N3)= explode(" ", readline());
$maior = $N1 > $N2 ? ($N1 > $N3 ? $N1 : $N3) : ($N2 > $N3 ? $N2 : $N3);
$menor = $N1 < $N2 ? ($N1 < $N3 ? $N1 : $N3) : ($N2 < $N3 ? $N2 : $N3);
if($N1 != $maior && $N1 != $menor){
    $meio = $N1;
}
if($N2 != $maior && $N2 != $menor){
    $meio = $N2;
}
if($N3 != $maior && $N3 != $menor){
    $meio = $N3;
}
echo "$menor\n";
echo "$meio\n";
echo "$maior\n";
echo "\n";
echo "$N1\n";
echo "$N2\n";
echo "$N3\n";