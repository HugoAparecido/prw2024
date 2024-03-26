<?php
$in= array_map('intval', explode(" ", readline()));
$n=$in[0];
$l=$in[1];
$c=$in[2];
$plavras = explode(" ", readline());
$tamLinha = 0;
for($i=0;$i<$n;$i++){
    $tamLinha += strlen($palavras[$i])+1;
    if($tamLinha>$c){
        $linhas++;
        $tamLinha = strlen($palavras[$i]+1);
    }
}
?>