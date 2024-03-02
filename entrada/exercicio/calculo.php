<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];
$baseIRPF = 0;
if ($salario <= 1412 && $idade < 65) {
    $pagamentoINSS = 0.075 * $salario;
} elseif ($salario > 1412 && $salario <= 2666.68 && $idade < 65) {
    $pagamentoINSS = 0.09 * $salario;
    $baseIRPF = $salario - $pagamentoINSS - 19.53;
} elseif ($salario > 2666.68 && $salario <= 4000.03 && $idade < 65) {
    $pagamentoINSS = 0.12 * $salario;
    $baseIRPF = $salario - $pagamentoINSS - 96.67;
} elseif ($salario > 4000.03 && $salario <= 7786.02 && $idade < 65) {
    $pagamentoINSS = 0.14 * $salario;
    $baseIRPF = $salario - $pagamentoINSS - 173.81;
} elseif ($idade >= 65) {
    $pagamentoINSS = 0;
    $baseIRPF = $salario;
}
// IRPF
$pagamentoIRPF = 0;
if ($baseIRPF >= 2259.21 && $baseIRPF <= 2826.65) {
    $pagamentoIRPF = 0.075 * $salario;
} elseif ($baseIRPF >= 2866.66 && $baseIRPF <= 3751.05) {
    $pagamentoIRPF = 0.15 * $salario;
} elseif ($baseIRPF >= 3751.06 && $baseIRPF <= 4664.68) {
    $pagamentoIRPF = 0.225 * $salario;
} elseif ($baseIRPF > 4664.68) {
    $pagamentoIRPF = 0.275 * $salario;
}
echo "O Senhor $nome terá que pagar R$" . number_format($pagamentoINSS, 2, ",", ".") . " de INSS e R$" . number_format($pagamentoIRPF, 2, ",", ".") . " de imposto de renda";
