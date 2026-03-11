<?php

function fatorial($num){
    $factorio = 1;

    for ($i=$num; $i > 0; $i--) { 
        $factorio *= $i;
    }
    return $factorio;
}

//main

do{
    $num = readline("INFORME UM NUMERO: ");
    $factorio = fatorial($num);
    echo $factorio . "\n";
}while($num != 0);