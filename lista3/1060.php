<?php
$positivos = 0;
for($i=0; $i<6;$i++){
    if(floatval(readline())>=0)
        $positivos++;
}
echo "$positivos valores positivos\n";