<?php

class Posto
{
    private $litros;
    private $litrosAbastecidos;

    // metodos
    public function __construct()
    {
        $this->litros = 0;
        $this->litrosAbastecidos = [];
    }

    public function abastecer($qtdLitros) {
        if($qtdLitros < $this->litros){
            $this->litros -= $qtdLitros;
            array_push($this->litrosAbastecidos, $qtdLitros);
            return true;
        }else{
            return false;
        }
    }

    public function repor($qtdLitros) {
        $this->litros += $qtdLitros;
        return $this->litros;
    }


    // gesetti

    public function getLitros()
    {
        return $this->litros;
    }

    public function setLitros($litros): self
    {
        $this->litros = $litros;

        return $this;
    }

    public function getLitrosAbastecidos()
    {
        return $this->litrosAbastecidos;
    }

    public function setLitrosAbastecidos($litrosAbastecidos): self
    {
        $this->litrosAbastecidos = $litrosAbastecidos;

        return $this;
    }
}

// main

$posto = new Posto();

$opcao = 0;
do {
    echo "\n---- MENU ----\n";
    echo "1° ABASTECER    \n";
    echo "2° REPOR        \n";
    echo "3° LISTAR       \n";
    echo "0° SAIR       \n";

    $opcao = readline("ESCOLHA: ");
    switch ($opcao) {
        case 1:
            $reload = readline("QUANTOS LITROS QUER ABASTECER: ");
            if ($posto->abastecer($reload) == false) {
                echo "\nGASOLINA INSUFICIENTE\n";
            }else{
                echo "\nREABASTECIDO COM SUCESSO\n";
            }
            break;

        case 2:
            $repor = readline("REPOR GASOLINA: ");
            $posto->repor($repor);
            echo "\nREPOSIÇÃO COM SUCESSO!\n";
            break;

        case 3:
            foreach ($posto->getLitrosAbastecidos() as $l) {
                echo "\nABASTECIMENTO: ". $l;
            }
            break;

        case 0:
            echo "\nDELETING SYSTEM 32...\n";
            break;

        default:
            echo "\nOPÇÃO INVALIDA\n";
            break;
    }
} while ($opcao != 0);