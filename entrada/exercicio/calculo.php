<?php
$nome=$_GET['nome'];
$idade=$_GET['idade'];
$salario=$_GET['salario'];
$baseIRPF = 0;
if($salario<=1412){
$pagamentoINSS = 0.075*$salario;
}
elseif($salario<=2666.68){
    $pagamentoINSS = 0.09*$salario;
    $baseIRPF = $salario - $pagamentoINSS - 19.53;
}
elseif($salario<=4000.03){
    $pagamentoINSS = 0.12*$salario;
    $baseIRPF = $salario - $pagamentoINSS - 96.67;
}
elseif($salario<=7786.02){
    $pagamentoINSS = 0.14*$salario;
    $baseIRPF = $salario - $pagamentoINSS - 173.81;
}
// IRPF
$pagamentoIRPF = 0;
if($baseIRPF >=2112.01 && $baseIRPF<=2826.65){
    $pagamentoIRPF = $salario - 0.075*$salario;
}
elseif($baseIRPF >=2112.01 && $baseIRPF<=3751.05){
    $pagamentoIRPF = 0.15*$salario;
}
elseif($baseIRPF >=2112.01 && $baseIRPF<=4664.68){
    $pagamentoIRPF = 0.225*$salario;
}
elseif($baseIRPF >=2112.01 && $baseIRPF<4664.68){
    $pagamentoIRPF = 0.2755*$salario;
}
if($idade>=65 && $baseIRPF<=3807.96){
    $pagamentoIRPF=0;
}
echo "O Senhor $nome terá que pagar R$".number_format($pagamentoINSS, 2, ",",".")."de INSS e R$".number_format($pagamentoIRPF, 2, ",",".")."de imposto de renda";