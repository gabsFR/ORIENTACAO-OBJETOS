<?php

for ($i=1; $i <= 5; $i++) { 
    $name = readline("\nQUAL SEU NOME: ");
    $pesos = readline("\nQUAL SEU PESO: ");
    $altura = readline("\nQUAL SUA ALTURA: ");
    $IMC = $pesos / ($altura * $altura);

  echo "\nNOME: " . $name
     . "\nPESO: " . $pesos
     . "\nALTURA: " . $altura
     . "\nIMC: " . $IMC . "\n";
}