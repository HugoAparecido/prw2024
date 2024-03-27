<?php
while (true) {
    $N = intval(readline());
    if ($N == 0)
        break;
    // Inicialize a matriz vazia
    $matriz = array();
    // Preencha a matriz com valores (por exemplo, números sequenciais)
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $matriz[$i][$j] = 'O';
        }
    }
    $direcoes = array(
        array(0, -1), // Esquerda
        array(-1, 0), // Cima
        array(0, 1),  // Direita
        array(1, 0)   // Baixo
    );
    $direcao_atual = 2; // Comece indo para a esquerda
    $posicaoX = intval($N / 2);
    $posicaoY = intval($N / 2);
    $passou = [];
    // Exiba a matriz
    for ($c = 0; $c < $N * $N; $c++) {
        $matriz[$posicaoX][$posicaoY] = 'X';
        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $N; $j++) {
                echo $matriz[$i][$j] . " ";
            }
            echo "\n"; // Pula para a próxima linha
        }
        array_push($passou, strval($posicaoX) . strval($posicaoY));
        $matriz[$posicaoX][$posicaoY] = 'O';
        // Calcule a próxima posição
        $posicaoX += $direcoes[$direcao_atual][0];
        $posicaoY += $direcoes[$direcao_atual][1];
        if ($direcao_atual == 2)
            if (!in_array(strval($posicaoX) . strval($posicaoY), $passou))
                $direcao_atual = 1;
            elseif ($direcao_atual == 1 && !in_array(strval($posicaoX) . strval($posicaoY), $passou))
                $direcao_atual = 0;
            elseif ($direcao_atual == 0 && !in_array(strval($posicaoX) . strval($posicaoY), $passou))
                $direcao_atual = 3;
            elseif ($direcao_atual == 3 && !in_array(strval($posicaoX) . strval($posicaoY), $passou))
                $direcao_atual = 2;
        echo "@\n";
    }
}