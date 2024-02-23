<?php
$idadeDias = intval(readline());
$ano = intval($idadeDias / 365);
$mes = intval($idadeDias % 365 / 30);
$dia = intval($idadeDias % 365 % 30);
echo "$ano ano(s)\n$mes mes(es)\n$dia dia(s)\n";