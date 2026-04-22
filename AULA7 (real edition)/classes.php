<?php

class Monitor
{ // começo classe monitor

    // atributos
    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;
    public $voltagem;
    // metodos
    function ligar()
    {
        echo "Monitor ligado!\n";
    }
    function desligar()
    {
        echo "Monitor desligado!\n";
    }
    function exibirImagem()
    {
        echo "Monitor exibindo imagem em " . $this->polegadas . " polegadas!\n";
    }
} // fim classe monitor

$monitor1 = new Monitor();
$monitor1->polegadas = 23;
$monitor1->resolucao = "1920x1080";
$monitor1->marca = "AOC";
$monitor1->cor = "preto";
$monitor1->voltagem = 220;
$monitor1->ligar();
$monitor1->exibirImagem();
$monitor1->desligar();
printf("Polegadas: %d | Marca: %s\n", 
$monitor1->polegadas, $monitor1->marca);

echo "\n";
// criar o objeto monitor 2
$monitor2 = new Monitor();
$monitor2->polegadas = 25;
$monitor2->resolucao = "1260x860";
$monitor2->marca = "Samsung";
$monitor2->cor = "vermelho";
$monitor2->voltagem = 120;
$monitor2->ligar();
$monitor2->exibirImagem();
$monitor2->desligar();
printf("Polegadas: %d | Marca: %s\n", 
$monitor2->polegadas, $monitor2->marca);

