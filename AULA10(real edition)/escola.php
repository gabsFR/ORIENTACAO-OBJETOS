<?php

class Escola
{

    private $nome;
    private $endereco;
    private $quant;

    // metodo
    public function getDados()
    {
        $dados = " | NOME: " . $this->nome;
        $dados .= " | ENDEREÇO: " . $this->endereco;
        $dados .= " | QUANTIDADE: " . $this->quant . "\n";

        return $dados;
    }

    public function __toString()
    {
        return $this->getDados();
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQuant()
    {
        return $this->quant;
    }

    public function setQuant($quant): self
    {
        $this->quant = $quant;

        return $this;
    }
}

// main
$cuckoo = 1;
$escolas = array();

do {

    $iscola = new Escola();
    $iscola->setNome(readline("Informe o nome da escola: "));
    $iscola->setEndereco(readline("Informe o endereço da escola: "));
    $iscola->setQuant(readline("Informe a quantidade de alunos da escola: "));
    echo "\n";
    array_push($escolas, $iscola);
    $cuckoo++;
} while ($cuckoo <= 4);

$maiorQuant = $escolas[0];
echo "\n\nDados das escolas\n";

foreach ($escolas as $e) {
    echo $e;

    // if escola maior q todos
    if ($maiorQuant->getQuant() < $e->getQuant()) {
        $maiorQuant = $e;
    }
}

echo "\n\nMaior escola: \n";
echo $maiorQuant . "\n";