<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$nome = $_GET['nome'];
$senhaInserida = $_GET['senha'];
$email = $_GET['email'];
$senha = 123;
$num3 = $num1 + $num2;
echo "o resultado da soma é $num3<br>";
if ($senha == $senhaInserida) {
    echo "<p><strong>Logado com sucesso Senhor $nome</strong>, teu email será $email a senha $senhaInserida</p>";
} else {
    echo "Senha ou email inválidos tente outra vez<br>";
    echo '<a href="entrada.html">Voltar</a>';
}
