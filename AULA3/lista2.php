<?php

function area($base, $altura){
    $area = $base * $altura;
    return $area;
}
function perimetro($base){
    $perimetro = $base * 4;
        return $perimetro;
}

$count = 3;

do {
    $base = readline("Informe a base do retangulo: ");
    $altura = readline("\nInforme a altura do retangulo: ");
    $area = area($base,$altura);
    $peri = perimetro($base);
    echo "A area do retangulo é: " . $area . "\n";
    echo "O Perimetro do retangulo é: " . $peri . "\n";
    $count--;
} while ($count <= 0);
