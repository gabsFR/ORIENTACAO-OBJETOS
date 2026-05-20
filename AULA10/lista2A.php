<?php

class Veiculo
{
    private $capacidade;
    private $passagensVendidas;

    // metodos
    function __construct($capacidade)
    {
        $this->capacidade = $capacidade;
        return $capacidade;
    }
    function venderPassagem(int $quantidade) {
        if ($this->passagensVendidas + $quantidade <= $this->capacidade) {
            $this->passagensVendidas++;
            echo "\nCOMPRA EFETUADA\n";
            return true;
        }else {
            echo "\nLUGARES INSUFICIENTES\n";
            return false;
        }
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}

$capacidade = readline("INFORME A CAPACIDADE: ");
$vehiculo = new Veiculo($capacidade);
do {
    $quantidade = readline("QUANTAS PASSAGENS?: ");
    $vendas = $vehiculo->venderPassagem($quantidade);
} while ($quantidade != 0);



