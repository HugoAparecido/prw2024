<?php
$senha_correta = false;
while (!$senha_correta) {
    if (intval(readline()) == 2002) {
        echo "Acesso Permitido\n";
        $senha_correta = true;
    } else
        echo "Senha Invalida\n";
}
