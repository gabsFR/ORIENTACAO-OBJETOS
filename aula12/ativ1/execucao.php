<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$cidades = [];

$SC = new Estado;
$SC->setNome("Santa Catarina");
$SC->setSigla("SC");
$PR = new Estado;
$PR->setNome("Parana");
$PR->setSigla("PR");

$florianopolis = new Cidade;
$florianopolis->setNome("Florianópolis");
$florianopolis->setQtdHabitantes(587486);
$florianopolis->setAltitude(3);
$florianopolis->setEstado($SC);
array_push($cidades, $florianopolis);

$blumenau = new Cidade;
$blumenau->setNome("Blumenau");
$blumenau->setQtdHabitantes(380597);
$blumenau->setAltitude(21);
$blumenau->setEstado($SC);
array_push($cidades, $blumenau);

$foz = new Cidade;
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHabitantes(297352);
$foz->setAltitude(167);
$foz->setEstado($PR);
array_push($cidades, $foz);

$curi = new Cidade;
$curi->setNome("Curitiba");
$curi->setQtdHabitantes(1830795);
$curi->setAltitude(934);
$curi->setEstado($PR);
array_push($cidades, $curi);

foreach ($cidades as $c) {
    echo "\nA cidade de " . $c->getNome() . ", localizada no estado " . $c->getEstado()->getNome(). " - " . $c->getEstado()->getSigla() . ", possui " .
    $c->getQtdHabitantes() . " habitantes e uma altitude de " . $c->getAltitude() . " metros.\n";
}