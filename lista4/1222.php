<?php
while (fscanf(STDIN, "%d%d%d", $N, $L, $C) !== false) {
    $conto = fgets(STDIN);
    $tamanhoConto = strlen($conto) - 1;
    $caracteres = $salvamento = 0;
    $linhas = $paginas = 1;
    for ($i = 0; $i < $tamanhoConto; ++$i) {
        if ($i && $conto[$i - 1] == ' ')
            $salvamento = $i;
        if ($caracteres == $C) {
            ++$linhas;
            if ($conto[$i] == ' ')
                $caracteres = 0;
            else
                $caracteres = $i - $salvamento + 1;
        } else
            ++$caracteres;
    }
    $paginas = ceil($linhas / $L); //arredonda para cima a divisão
    printf("%d\n", $paginas);
}