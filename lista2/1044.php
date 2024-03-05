<?php
list($V1, $V2) = explode(' ', readline());
if (($V1 % $V2) == 0 || ($V2 % $V1) == 0)
    echo "Sao Multiplos\n";
else
    echo "Nao sao Multiplos\n";
