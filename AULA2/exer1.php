<?php

echo "DIGITE 10 NUMEROS\n";

for ($i=1; $i <= 10 ; $i++) { 
    $num = readline($i . ".DIGITE UM NUMERO: ");
    if ($num < 0) {
        echo "NUMERO NEGATIVO\n";
    }else{
        echo "NUMERO POSITIVO\n";

    }
}