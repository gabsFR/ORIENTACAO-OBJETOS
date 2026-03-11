<?php

function primo($num){
    $cuckoo = 0;
    for ($div=$num; $div >= 1; $div--) { 
        if($num % $div == 0)
        {
            $cuckoo++;            
        }
    }
     if($cuckoo > 2){
        return false;    
    }else{
        return true;
    }

}
//main

do {
    $num = readline("\nInforme um numero: ");
    if ($num <= 1) {
        echo $num . " não é um numero primo\n";
        break;
    }
    $elprimo = primo($num);
    if($elprimo == true){
        echo $num . " é um numero primo\n";
    }else{
        echo $num . " não é um numero primo\n";
    }
} while ($num >= 2);
