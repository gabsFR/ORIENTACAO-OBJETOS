<?php

//functions

function soma($gru)
{
    $soma = 0;
    foreach ($gru as $pepsiman) {
        $soma = $pepsiman + $soma;
    }
    return $soma;
}

function par($gru)
{
    $pares = 0;
    foreach ($gru as $pinduca) {
        if ($pinduca % 2 == 0) {
            $pares++;
        }
    }
    return $pares;
}

//main

$gru = array();
do {
    $num = readline("Informe um numero: ");
    array_push($gru, $num);
} while ($num > 0);

// 1. soma de todos
$soma = soma($gru);
echo "\nA SOMA DE TODOS OS NUMEROS É: " . $soma . "\n";
// 2. pares
$par = par($gru);
echo "\nTEM " . $par . " NUMEROS PARES";
// 3. impares

// 4. divisiveis por 5

// 5. maior e menor

// 6. 3, 6 e 9