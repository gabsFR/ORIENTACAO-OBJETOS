<?php


class Cidade
{

    // atributos
    public $nome;
    public $habitantes;
    public $area;
    public $altitude;
    public $estado;
    // metodos
    function retornaDados() {
        $dados = $this->nome . "|";
        $dados .= $this->habitantes . "|";
        $dados .= $this->area . "|";
        $dados .= $this->altitude . "|";
        $dados .= $this->estado . "|";
        return $dados;
    }
}
$cuckoo = 1;
do {
    $cidade = new Cidade;
    echo "\n";
    $cidade->nome = readline("Informe um nome: ");
    $cidade->habitantes = readline("Informe os habitantes: ");
    $cidade->area = readline("Informe a area: ");
    $cidade->altitude = readline("Informe a altitude: ");
    $cidade->estado = readline("Informe o estado: ");
    echo $cidade->retornaDados();
    
    $cuckoo++;
} while ($cuckoo <= 5);
