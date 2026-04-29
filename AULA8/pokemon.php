<?php

$cuckoo = 1;
class Pokemon
{

    // atributos
    public $nome;
    public $tipo;
    public $LVL;
    public $HP;
    public $ATK;
    public $DF;
    public $SPD;
    public $XP;

    // metodos
    function __construct($nome, $tipo, $HP, $ATK, $DF, $SPD, $XP, $LVL)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->HP = $HP;
        $this->ATK = $ATK;
        $this->DF = $DF;
        $this->SPD = $SPD;
        $this->XP = $XP;
        $this->LVL = $LVL;
    }

    function fight()
    {
        $win = random_int(1, 2);

        if ($win == 1) {
            echo "\nYOU WIN!\n";
            $this->XP += random_int(5, 25);
        } else {
            echo "\nYOU LOSE...\n";
        }
    }
    function digivoluir()
    {
        $this->LVL = 1;
        if ($this->XP >= 10) {
            $this->HP += 5;
            $this->ATK += 15;
            $this->DF += 12;
            $this->SPD += 10;
            $this->LVL++;
            $this->XP - 15;
            echo "SEU POKEMON UPOU DE NIVEL!\n";
        }   
    }
    function stats(){
        echo "\nNOME: " . $this->nome . "\n";
        echo "TIPO: " . $this->tipo . "\n";
        echo "HP: " . $this->HP . "\n";
        echo "ATK: " . $this->ATK . "\n";
        echo "DF: " . $this->DF . "\n";
        echo "SPD: " . $this->SPD . "\n";
        echo "LVL: " . $this->LVL . "\n";
        echo "XP: " . $this->XP . "\n";
        
    }
}

$pokemon1 = new Pokemon("Volcarona", "Inseto", 85, 60, 65, 100, 0, 1);
echo "\nSEU POKEMON ENTROU EM BATALHA\n";
$pokemon1 -> stats();
$pokemon1 -> fight();
$pokemon1 -> digivoluir();
$pokemon1 -> stats();

$pokemon2 = new Pokemon("Golisopod", "Agua", 75, 125, 140, 40, 0, 1);
echo "\nSEU POKEMON ENTROU EM BATALHA\n";
$pokemon2 -> stats();
$pokemon2 -> fight();
$pokemon2 -> digivoluir();
$pokemon2 -> stats();
