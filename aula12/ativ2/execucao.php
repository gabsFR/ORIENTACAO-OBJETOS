<?php
require_once("modelo/Turma.php");
require_once("modelo/Alunos.php");


$turma = new Turma();
$turma->setNome("2-Cr");
$turma->setCurso("Curi");

$cuckoo = 1;

do {
$aluno = new Alunos;
$aluno->setNome(readline("Insira o seu nome: "));
$aluno->setIdade(readline("Insira a sua idade: "));
$aluno->setTurma($turma);
$turma->addAluno($aluno);
echo "\n";

$cuckoo++;
} while ($cuckoo <= 5);

foreach ($turma->getLista() as $t) {
    echo "ALUNO: " . $t->getNome();
    echo "\nIDADE: " . $t->getIdade();
    echo "\nTURMA: " . $t->getTurma()->getNome() . "\n";
    echo "\n";
}