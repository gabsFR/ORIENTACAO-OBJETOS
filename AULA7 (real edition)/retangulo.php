<?php

class Retangulo
{
    // atributos
    public $base;
    public $altura;
    // metodo
    function area()
    {
        echo "AREA: " . $this->base * $this->altura . "\n";
    }
    function peri()
    {
        echo "PERIMETRO: " . $this->base * 2 + $this->altura * 2 . "\n";
    }
}
$count = 0;

do {
    $retangulo = new Retangulo;
    $retangulo->base = readline("Informe a base: ");
    $retangulo->altura = readline("Informe a altura: ");
    $retangulo->area();
    $retangulo->peri();
    $count++;
} while ($count <= 3);
