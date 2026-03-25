<?php

$media = [];
for ($i = 1; $i <= 10; $i++) {
    $num = readline("informe um número: ");
    array_push($media, $num);
}

$tam = count($media);

$soma = 0;
foreach ($media as  $aritmetica) {
    $soma = $soma + $aritmetica;
}

$mediatotal = $soma / $tam;

echo "A media total é: " . $mediatotal . "\n";
