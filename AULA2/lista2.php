<?php

echo "[CONFRATERNIZAÇAO 2°TDS]\n";
$valortotal = 0;

do {

$Ventry = readline("\nINFORME A CONTRIBUIÇÃO: ");
$valortotal += $Ventry;

} while ($Ventry > 0);

echo "VALOR ARRECADADO: $" . $dindin . "\n";

