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
echo $vetor2[0] . ", " . $vetor2[1] . ", " . $vetor2[2] . ", " . $vetor2[3] . ", " . $vetor2[4];
