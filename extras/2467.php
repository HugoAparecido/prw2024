<?php
list($N, $Q) = explode(" ", readline());
$N = intval($N);
$Q = intval($Q);
$NxN = [];
for ($i = 0; $i < $N; $i++)
    for ($j = 0; $j < $N; $j++)
        $NxN[$i][$j] = 0;
for ($i = 0; $i < $Q; $i++) {
    $interacao = explode(" ", readline());
    switch (intval($interacao[0])) {
        case 1:
            for ($j = 0; $j < $N; $j++)
                $NxN[$interacao[1]][$j] = $interacao[2];
            break;
        case 2:
            for ($i = 0; $i < $N; $i++)
                $NxN[$i][$interacao[1]] = $interacao[2];
            break;
        case 3:
            for ($j = 0; $j < $N; $j++)
                $arrayAtual[] = $NxN[$interacao[1]][$j];
            $arrayAtual = array_count_values($arrayAtual);
            $maior = 0;
            $numero = 0;
            foreach ($arrayAtual as $numeroAtual => $ocorrencias)
                if ($ocorrencias > $maior) {
                    $maior = $ocorrencias;
                    $numero = $numeroAtual;
                }
            print_r($arrayAtual);
            break;
        case 4:
            for ($i = 0; $i < $N; $i++)
                $NxN[$i][$interacao[1]] = $interacao[2];
            $arrayAtual = $NxN[$interacao[1]][$j];
            $arrayAtual = array_count_values($arrayAtual);
            print_r($arrayAtual);
            break;
    }
}
print_r($NxN);
