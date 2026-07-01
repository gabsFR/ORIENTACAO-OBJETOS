<?php

class Prato{

    private $descricao;
    private $quant;
    private $valorUnit;

    // metodos

    public function getValorTotal(){
        return $this->quant * $this->valorUnit;
    }

    public function __toString()
    {
        $dados = $this->getDescricao() . " | ";
        $dados .= $this->getQuant() . " | ";
        $dados .= $this->getValorUnit() . " | ";
        $dados .= "Total: " . $this->getValorTotal() . "\n";
        return $dados;
    }

    // getset
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

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

    public function getValorUnit()
    {
        return $this->valorUnit;
    }

    public function setValorUnit($valorUnit): self
    {
        $this->valorUnit = $valorUnit;

        return $this;
    }
}
// main
$pratos = [];

// leitura prato
for ($i=0; $i < 3; $i++) { 
    $prato = new Prato();
    $prato->setDescricao(readline("informe a descrição: "));
    $prato->setQuant(readline("informe a quant: "));
    $prato->setValorUnit(readline("informe o valor unitario: "));

    array_push($pratos, $prato);
}

$totalJanta = 0;
foreach ($pratos as $p) {
    echo $p;

    $totalJanta += $p->getValorTotal();
}

echo "Total da janta: " . $totalJanta . "\n";