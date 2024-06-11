<?php
    $tam = 5;
    $min = floatval(readline());
    for($lin=0; $lin<$tam; $lin++){
        for($col=0; $col<$tam; $col++){
            $mat[$lin][$col] = floatval(readline());
        }
    }
    for($l=0; $l<$tam; $l++){
        for($c=0; $c<$tam; $c++){
            if($mat[$l][$c]>=$min){
                echo "Valor Encontrado: ";
                echo number_format($mat[$l][$c], 2, ".", "");
                echo " Linha: $l Coluna: $c\n";
            }
        }
    }
?>