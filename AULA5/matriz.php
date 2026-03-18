<?php

$pokemon = ["nome" => "Pikachu", "tipo" => "Elétrico"];
$pokemon2 = ["nome" => "Blaziken", "tipo" => "Fogo"];
$pokemon3 = ["nome" => "Decidueye", "tipo" => "Planta"];

$pokemons = [$pokemon, $pokemon2, $pokemon3];


//print_r($pokemons);

echo "Npme do segundo pokemon: " . $pokemons[1]["nome"] . "\n";