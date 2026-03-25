<?php

$vetor1 = array();
$vetor2 = array();

for ($i = 0; $i < 5; $i++) {
    $data = readline("Informe 5 palavras: ");
    array_push($vetor1, $data);
}

echo "\nTransferindo...\n";

for ($i = 0; $i < 5; $i++) {
    array_push($vetor2, $vetor1[$i]);
}

foreach ($vetor2 as $gru) {
    echo $gru . ", ";
}
