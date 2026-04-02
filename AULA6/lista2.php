<?php

$count = 1;
function mrMaker($retangulo)
{
    $area = $retangulo["base"] * $retangulo["altura"];
    return $area;
}

$retangulos = array();

for ($i = 0; $i <= 4; $i++) {
    echo "\n--- RETANGULO " . $i + 1 . " ---\n";
    $retangulo["base"] = readline("Informe a base: ");
    $retangulo["altura"] = readline("Informe a altura: ");

    array_push($retangulos, $retangulo);
}

foreach ($retangulos as $gerson) {
    $area = mrMaker($gerson);
    echo "\n--Area N" . $count . "°--\n";
    echo $area;
    $count++;
}
echo "\n";
