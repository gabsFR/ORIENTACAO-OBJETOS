<?php

class Selecao
{

    private $pais;
    private $tecnicos;
    private $esquema;


    public function getDados()
    {
        $dados = "| País: " . $this->pais;
        $dados .= " | Tecnicos: " . $this->tecnicos;
        $dados .= " | Esquema: " . $this->esquema . "\n";

        return $dados;
    }

    public function __toString()
    {
       return $this->getDados();
    }



    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTecnicos()
    {
        return $this->tecnicos;
    }

    public function setTecnicos($tecnicos): self
    {
        $this->tecnicos = $tecnicos;

        return $this;
    }

    public function getEsquema()
    {
        return $this->esquema;
    }

    public function setEsquema($esquema): self
    {
        $this->esquema = $esquema;

        return $this;
    }
}

$brasil = new Selecao();
$brasil->setPais("Brasil");
$brasil->setTecnicos("Ancelotti");
$brasil->setEsquema("4-3-3");

$arg = new Selecao();
$arg->setPais("Argentina");
$arg->setTecnicos("Lionel Scaloni");
$arg->setEsquema("4-3-3");

$selecoes = array($brasil, $arg);
// echo "País da primeira seleção: " . $selecoes[0]->getPais() . "\n";
// echo "Dados da segunda seleção: " . $selecoes[1]->getDados() . "\n";

$port = new Selecao();
$port->setPais("Portugal");
$port->setTecnicos("Roberto Martinez");
$port->setEsquema("4-3-3");

array_push($selecoes, $port);
echo "\n\nDados de todas as seleções: \n";

foreach ($selecoes as $s) {
    echo $s;
}

