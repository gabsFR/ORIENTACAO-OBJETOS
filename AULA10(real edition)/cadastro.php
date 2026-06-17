<?php

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $idade;

    public function getDados()
    {
        $dados = "| NOME : " . $this->nome;
        $dados .= " " . $this->sobrenome;
        $dados .= "| IDADE : " . $this->idade . "\n";

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

// main

$opcao = 0;
$lista = array();

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Cadastrar\n";
    echo "2- Listar\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "PROGRAMA ENCERRADO";
            break;

        case 1:
            echo "\n| CADASTRO |\n";
            $cadastro = new Pessoa();
            $cadastro->setNome(readline("NOME: "));
            $cadastro->setSobrenome(readline("SOBRENOME: "));
            $cadastro->setIdade(readline("IDADE: "));
            echo "\n";
            array_push($lista, $cadastro);
            break;

        case 2:
            echo "\n| LISTA |\n";
            foreach($lista as $l){
                echo $l;
            }
            break;

        default:
            echo "OPÇÃO INVALIDA";
            break;
    }
} while ($opcao != 0);
