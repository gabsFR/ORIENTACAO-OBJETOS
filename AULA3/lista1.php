<?php

function funcao($x){
    $y = (5 * $x) + (2*$x) + 3;
    return $y;
};

//main
$count = 5;

do{
    $x = readline("Informe o parametro de F(x) = 5x + 2x + 3: ");
    $XFACTOR = funcao($x);
    echo "A resposta da função é: " . $XFACTOR . "\n";
    $count--;
}while($count != 0);
