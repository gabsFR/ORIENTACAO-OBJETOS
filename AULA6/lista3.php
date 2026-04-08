<?php

//functions

function soma(array $gru)
{
    $soma = 0;
    foreach ($gru as $pepsiman) {
        $soma = $pepsiman + $soma;
    }
    return $soma;
}

function par(array $gru)
{
    $pares = 0;
    foreach ($gru as $pinduca) {
        if ($pinduca % 2 == 0) {
            $pares++;
        }
    }
    return $pares;
}

function impar(array $gru)
{
    $impares = 0;
    foreach ($gru as $pinduca) {
        if ($pinduca % 2 != 0) {
            $impares++;
        }
    }
    return $impares;
}

function divFive(array $gru)
{

    $elcinco = 0;
    foreach ($gru as $pinduca) {
        if ($pinduca % 5 == 0) {
            $elcinco++;
        }
    }
    return $elcinco;
}

function shroom(array $gru)
{

    $menor = $gru[0];
    $maior = $gru[0];

    //Encontra o menor
    foreach ($gru as $v) {
        if ($v < $menor)
            $menor = $v;
    }

    //Encontra o maior
    foreach ($gru as $v) {
        if ($v > $maior)
            $maior = $v;
    }

    return $maior - $menor;
}

function qtdTresSeisNove(array $gru) {
    $qtdTresSeisNove = 0;
    foreach($gru as $v) {
        if($v == 3 || $v == 6 || $v == 9)
            $qtdTresSeisNove++;
    }
    
    return $qtdTresSeisNove;
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
$impar = impar($gru);
echo "\nTEM " . $impar . " NUMEROS IMPARES";
// 4. divisiveis por 5
$ps5 = divFive($gru);
echo "\nTEM " . $ps5 . " DIVISIVEIS POR 5";
// 5. maior e menor
$luigi = shroom($gru);
echo "\nA DIFERENÇA ENTRE O MAIOR E O MENOR É: " . $luigi;
// 6. 3, 6 e 9
$sixnine = qtdTresSeisNove($gru);
echo "\nA QUANTIDADE DE 3, 6 E 9 SÃO: " . $sixnine . "\n";
