<?php

class Calc
{

    private $numA;
    private $numB;

    // metodos

    public function soma()
    {
        $soma = $this->numA + $this->numB;
        return $soma;
    }
    public function subtra()
    {
        $menos = $this->numA - $this->numB;
        return $menos;
    }
    public function vezes()
    {
        $vezes = $this->numA * $this->numB;
        return $vezes;
    }
    public function div()
    {
        $div = $this->numA / $this->numB;
        return $div;
    }
    public function resto()
    {
        $resto = $this->numA % $this->numB;
        return $resto;
    }
    public function __toString()
    {
        $dados = "SOMA:" . $this->soma() . "\n";
        $dados .= "SUB:" . $this->subtra() . "\n";
        $dados .= "MULT: " . $this->vezes() . "\n";
        $dados .= "DIV: " . $this->div() . "\n";
        $dados .= "RESTO: " . $this->resto() . "\n";

        return $dados;
    }

    // geys e seys
    public function getNumA()
    {
        return $this->numA;
    }

    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB()
    {
        return $this->numB;
    }

    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

// main
$calc = new Calc();
$calc->setNumA(readline("NUM A: "));
$calc->setNumB(readline("NUM b: "));
echo $calc;
