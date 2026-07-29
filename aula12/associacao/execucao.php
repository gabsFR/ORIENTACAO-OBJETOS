<?php

require_once("modelo/Pais.php");
require_once("modelo/Jogador.php");

$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("America do sul");
$pais->setTitulos(5);

$jogador = new Jogador();
$jogador->setNome("Neymar");
$jogador->setPosicao("Buxa");
$jogador->setNumero(10);
$jogador->setPais($pais);

echo "Nome do jogador: " . $jogador->getNome() . "\n";
echo "Posição do jogador: " . $jogador->getPosicao() . "\n";
echo "Numero do jogador: " . $jogador->getNumero() . "\n";
echo "País do jogador: " . $jogador->getPais()->getNome() . "\n";
echo "Continente do jogador: " . $jogador->getPais()->getContinente() . "\n";