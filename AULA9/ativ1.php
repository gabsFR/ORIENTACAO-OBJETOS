<?php

class Pessoa
{

    // atributos
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    // metodos
    function retornaApresentação()
    {
        $dados = "Olá, sou " . $this->nome;
        $dados .= ", moro no endereço " . $this->endereco;
        $dados .= ", " . $this->cidade;
        $dados .= ", " . $this->UF;
        $dados .= ", e tenho uma altura de " . $this->altura;
        return $dados;
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

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$cuckoo = 1;
do {
    $pessoa = new Pessoa;
    echo "\n";
    $pessoa->setNome(readline("NOME: "));
    $pessoa->setEndereco(readline("ENDEREÇO: "));
    $pessoa->setCidade(readline("CIDADE: "));
    $pessoa->setUF(readline("UF: "));
    $pessoa->setAltura(readline("ALTURA: "));
    echo $pessoa->retornaApresentação();

    $cuckoo++;
} while ($cuckoo <= 2);
