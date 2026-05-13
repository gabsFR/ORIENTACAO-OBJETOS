<?php

class Carro
{

    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    // metodos
    // public function maisRapido()
    // {
    //     $dados = "O carro mais rapido é: " . $this->modelo . "-" . $this->marca . ", fabricado em " . $this->anoFabricacao . ", com velocidade maxima de " . $this->velocidadeMax . "km/H";

    //     return $dados;
    // }

    // public function maisLento()
    // {
    //     $dados = "O carro mais lento é: " . $this->modelo . "-" . $this->marca . ", fabricado em " . $this->anoFabricacao . ", com velocidade maxima de " . $this->velocidadeMax . "km/H";

    //     return $dados;
    // }

        public function getDados()
        {
            $dados = "MODELO: " . $this->modelo . "\n";
            $dados .= "MARCA: " . $this->marca . "\n";
            $dados .= "ANO FABRICAÇÃO: " . $this->anoFabricacao . "\n";
            $dados .= "VELOCIDADE MAX: " . $this->velocidadeMax . "\n";
            
            return $dados;
        }
    // gets e sets

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}

$carro1 = new Carro();
echo "\n|--CAR MAK3R 5000--|\n";
$carro1->setModelo(readline("Qual o modelo: "));
$carro1->setMarca(readline("Qual a marca: "));
$carro1->setAnoFabricacao(readline("Qual o ano de fabricação: "));
$carro1->setVelocidadeMax(readline("Qual a velocidade Max: "));

$carro2 = new Carro();
echo "\n|--CAR MAK3R 5000--|\n";
$carro2->setModelo(readline("Qual o modelo: "));
$carro2->setMarca(readline("Qual a marca: "));
$carro2->setAnoFabricacao(readline("Qual o ano de fabricação: "));
$carro2->setVelocidadeMax(readline("Qual a velocidade Max: "));

$carro3 = new Carro();
echo "\n|--CAR MAK3R 5000--|\n";
$carro3->setModelo(readline("Qual o modelo: "));
$carro3->setMarca(readline("Qual a marca: "));
$carro3->setAnoFabricacao(readline("Qual o ano de fabricação: "));
$carro3->setVelocidadeMax(readline("Qual a velocidade Max: "));

$katchau = $carro1;
$washed = $carro1;

if ($carro2->getVelocidadeMax() > $katchau) {
    $katchau = $carro2;
}
if ($carro3->getVelocidadeMax() > $katchau) {
    $katchau = $carro3;
}
echo "\n\n|--CARRO MAIS RAPID0--|\n";
echo $katchau->getDados();

if ($carro2->getVelocidadeMax() < $washed) {
    $washed = $carro2;
}
if ($carro3->getVelocidadeMax() < $washed) {
    $washed = $carro3;
}

echo "\n\n|--CARRO MAIS LENT0--|\n";
echo $washed->getDados();


