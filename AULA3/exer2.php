<?php

function area($raio, $pi = 3.14){
    $areia = $pi * ($raio * $raio);
    return $areia;
}

function circunferencia($raio, $pi = 3.14){
    $circo = 2 * $pi * $raio;
    return $circo;
}

//principal
    $raio1 = readline("ME INFORME O RAIO DO 1°CIRCULO: ");
    $areia1 = area($raio1);
    $circo1 = circunferencia($raio1);
echo "A Area deste circulo é: " . $areia1 . "\n";
echo "A circunferencia deste circulo é: " . $circo1 . "\n";

    $raio2 = readline("ME INFORME O RAIO DO 2°CIRCULO: ");  
    $areia2 = area($raio2);
    $circo2 = circunferencia($raio2);
echo "A Area deste circulo é: " . $areia2 . "\n";
echo "A circunferencia deste circulo é: " . $circo2 . "\n";

    $raio3 = readline("ME INFORME O RAIO DO 3°CIRCULO: ");
    $areia3 = area($raio3);
    $circo3 = circunferencia($raio3);
echo "A Area deste circulo é: " . $areia3 . "\n";
echo "A circunferencia deste circulo é: " . $circo3 . "\n";