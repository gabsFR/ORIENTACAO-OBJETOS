<?php

echo "ESCREVA 3 NUMEROS INTEIROS\n";
$n1 = readline("numero 1: ");
$n2 = readline("\nnumero 2: ");
$n3 = readline("\nnumero 3: ");

if($n1 < $n2 && $n1 < $n3){
    echo "O menor numero é o numero 1: " . $n1 . "\n";
}if($n2 < $n1 && $n2 < $n3){
    echo "O menor numero é o numero 2: " . $n2 . "\n";
}if($n3 < $n1 && $n3 < $n2){
    echo "O menor numero é o numero 3: " . $n3 . "\n";
}
