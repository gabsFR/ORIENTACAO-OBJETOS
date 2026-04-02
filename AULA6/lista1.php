<?php

// função
function celsiusMelhor($celsius)
{
    return $celsius * 1.8 + 32;
}

function fatorial($num)
{
    $factorio = 1;

    for ($i = $num; $i > 0; $i--) {
        $factorio *= $i;
    }
    return $factorio;
}

function funcao($x)
{
    $x = (($x * $x) + 2 * $x + 4) / 2 * $x;
    return $x;
}

// main

$silo = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

// 1- ler 5 elementos vetor
for ($i = 1; $i <= 5; $i++) {
    $num = readline("Informe 5 numeros: ");
    array_push($silo, $num);
}

// 2- criar vetor aplicando formula (c pra f)
foreach ($silo as $n) {
    $fan = celsiusMelhor($n);
    array_push($vetor1, $fan);
}
// 3- crar vetor 2 calculando fatorial
foreach ($silo as $n) {
    $fac = fatorial($n);
    array_push($vetor2, $fac);
}

// 4- criar vetor 3 calculando f(x)
foreach ($silo as $n) {
    $func = funcao($n);
    array_push($vetor3, $func);
}
// 5- imprimir os 3 vetores utilizando a função
echo "\n\n - - - CELCIUS PRA FAHRENHEIT - - -\n\n";
foreach ($vetor1 as $elmacho) {
    echo $elmacho . " - ";
}

echo "\n\n - - - FATORIAL - - -\n\n";
foreach ($vetor2 as $baltazar) {
    echo $baltazar . " - ";
}

echo "\n\n - - - FUNCAO - - -\n\n";
foreach ($vetor3 as $scarlet) {
    echo $scarlet . " - ";
}
echo "\n";