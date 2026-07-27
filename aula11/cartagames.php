<?php

class Cartas
{
    private int $num;
    private string $nome;
    private string $balatrez;

    // metodos

    public function __toString()
    {
        return "\n" . $this->num . " ". $this->nome . " | " . $this->balatrez . "\n";
    }


    public function getNum(): int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getBalatrez(): string
    {
        return $this->balatrez;
    }

    public function setBalatrez(string $balatrez): self
    {
        $this->balatrez = $balatrez;

        return $this;
    }
}

// CRIAR BARALHO
$balatro = [];
$naipes = ["♥COPAS♥", "♦OUROS♦", "♣PAUS♣", "♠ESPADAS♠"];
for ($i = 1; $i <= 13; $i++) {
    $cartas = new Cartas();
    $cartas->setNum($i);
    if ($i == 1) {
        $cartas->setNome("Jimbo");
    }
    else if ($i == 11) {
        $cartas->setNome("Canio");
    }
    else if ($i == 12) {
        $cartas->setNome("Perkeo");
    }
    else if ($i == 13) {
        $cartas->setNome("Yorick");
    }else{
        $cartas->setNome("");
    }

    $cartas->setBalatrez(($naipes[array_rand($naipes)]));
    array_push($balatro, $cartas);
}

$lucky38 = $balatro[array_rand($balatro)];
echo "\n| - BALATRO - |\n";
foreach ($balatro as $jim) {
    echo $jim;
}

$acertou = false;

do {
    $palpite = readline("\nESCOLHA A CARTA CERTA OU APERTE 0 PARA DESISITIR: ");
    if ($palpite == 0) {
        echo "\nDESISTINDO...\n";
        break;
    }
    if($palpite == $lucky38->getNum()){
        echo "Voce acertou!\n";
        echo "\nA carta sorteada era " . $lucky38;
        $acertou = true;
        break;
    }
    else{
        echo "\nTente novamente, voce errou\n";
    }
    
} while (!$acertou || $palpite != 0);
