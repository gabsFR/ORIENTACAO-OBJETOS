<?php


//funçao
function soma($paises)
{
    $soma = 0;
    foreach ($paises as $souzones) {
        $soma = $soma + $souzones["habit"];
    }
    return $soma;
}
//main
$paises = [];
$cuckoo = 0;
do {
    echo "\nPAÍS " . $cuckoo + 1 . "°\n";
    $nome = readline("\nINFORME O NOME DE UM PAÍS: ");
    $HIC = readline("\nINFORME O CONTINENTE: ");
    $HABOO = readline("\nINFORME A QTD DE HABITANTES: ");
    $pais = ["pais" => $nome, "cont" => $HIC, "habit" => $HABOO];
    array_push($paises, $pais);
    $cuckoo++;
} while ($cuckoo <= 4);


//Saídas

$soma = soma($paises);
echo "\nA SOMA DE TODOS OS HABITANTES É: " . $soma;
