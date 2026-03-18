<?php

$civ1 = ["Nome" => "Manuel de Medeiros",
         "Endereço" => "Rua das Acácias",
         "Cidade" => "Foz do Iguaçu",
         "UF" => "PR"];

$civ2 = ["Nome" => "Juliana de Amaral",
         "Endereço" => "Rua dos Pinheiros",
         "Cidade" => "Florianópolis",
         "UF" => "SC"];

$civ3 = ["Nome" => "Rodrigo Baidek",
         "Endereço" => "Rua Dom Pedro I",
         "Cidade" => "Foz do Iguaçu",
         "UF" => "PR"];

$civ4 = ["Nome" => "Fabíola da Silva",
         "Endereço" => "Rua Chile",
         "Cidade" => "Guarulhos",
         "UF" => "SP"];

$CIV = [$civ1, $civ2, $civ3, $civ4];

foreach ($CIV as $CIVI) {
    echo $CIVI["Nome"] . " | " . $CIVI["Endereço"] . " | " . $CIVI["Cidade"] . " | " . $CIVI["UF"] . "\n";
}
