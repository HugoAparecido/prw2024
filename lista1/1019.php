<?php
$tempoSegundos = intval(readline());
$horas = intval($tempoSegundos / 3600);
$minutos = intval(($tempoSegundos % 3600) / 60);
$segundos = intval(($tempoSegundos % 3600) % 60);
echo "$horas:$minutos:$segundos\n";