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
/*while ($entrada = fgets(STDIN)) {
    list($numeroPalavrasConto, $numeroLinha, $caracteresLinha) = explode(" ", $entrada);
    $paginas = $linhas = 1;
    $conto = readline();
    $conto = explode(" ", $conto);
    $letras = 0;
    for ($i = 0; $i < $numeroPalavrasConto; $i++) {
        $x = strlen($conto[$i]);
        if (($letras + $x + 1) <= $caracteresLinha)
            $letras += 1 + $x;
        else {
            ++$linhas;
            if ($linhas > $numeroLinha) {
                ++$paginas;
                $linhas = 1;
            }
            $letras = 0;
        }
    }
    echo "$paginas\n";
}*/
?>