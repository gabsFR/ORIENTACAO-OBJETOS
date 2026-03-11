<?php

//function
function divisaoExata($dividendo,$divisor){
    if($dividendo % $divisor == 0){
        return true;

    return false;
    }
}
//main

do {
    $num = readline("Informe o numero: ");
    for ($div=$num-1; $div > 0; $div--) {
        $dividiu = divisaoExata($num, $div);
    
        if($dividiu == true){
            echo $div . ", ";
    }
}

echo "\n";
} while ($num > 1);