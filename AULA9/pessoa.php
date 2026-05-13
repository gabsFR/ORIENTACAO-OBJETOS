<?php

class Pessoa
{

    // atributos
    private $nome;
    private $sobrenome;
    private $idade;

    // metodo
    // public function __construct($nome, $sobrenome, $idade) {}
    public function retornaApresentação()
    {
        $dados = "Ola, sou " . $this->nome;
        $dados .= " " . $this->sobrenome;
        $dados .= " e tenho " . $this->idade;
        $dados .= " anos!\n";
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
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoa = new Pessoa;
$pessoa->setNome("Gabriel");
$pessoa->setSobrenome("Fonseca");
$pessoa->setIdade(16);
echo "Nome da pessoa: " . $pessoa->getNome() . "\n";
