<?php

class Receita
{
    private string $R_descricao;
    private float $R_valor;

    // morshus
    public function __toString()
    {
        return "VALOR: " . $this->getRValor() . " | DESCRIÇÃO: " . $this->getRDescricao() . "\n";
    }
    // getisetti

    public function getRDescricao(): string
    {
        return $this->R_descricao;
    }

    public function setRDescricao(string $R_descricao): self
    {
        $this->R_descricao = $R_descricao;

        return $this;
    }

    public function getRValor(): float
    {
        return $this->R_valor;
    }

    public function setRValor(float $R_valor): self
    {
        $this->R_valor = $R_valor;

        return $this;
    }
}

class Despesa
{
    private string $D_descricao;
    private float $D_valor;

    // morshu
    public function __toString()
    {
        return "VALOR: " . $this->getDValor() . " | DESCRIÇÃO: " . $this->getDDescricao() . "\n";
    }
    // gettisetti

    public function getDDescricao(): string
    {
        return $this->D_descricao;
    }

    public function setDDescricao(string $D_descricao): self
    {
        $this->D_descricao = $D_descricao;

        return $this;
    }

    public function getDValor(): float
    {
        return $this->D_valor;
    }

    public function setDValor(float $D_valor): self
    {
        $this->D_valor = $D_valor;

        return $this;
    }
}

// main


$totalReceitas = 0;
$totalDespesas = 0;
$receitas = [];
$despesas = [];

do {
    echo "\n------ MENU -------\n";
    echo "1° ADICIONAR RECEITA \n";
    echo "2° ADICIONAR DESPESA \n";
    echo "3° LISTAR RECEITAS      \n";
    echo "4° LISTAR DESPESAS       \n";
    echo "5° SUMARIZAR       \n";
    echo "0° SAIR              \n";

    $opcao = readline("ESCOLHA: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $receita = new Receita();
            $receita->setRValor(readline("INSIRA O VALOR: "));
            $receita->setRDescricao(readline("INSIRA A DESC: "));
            array_push($receitas, $receita);
            echo "\033[2J\033[1;1H";
            break;

        case 2:
            $despesa = new Despesa();
            $despesa->setDValor(readline("INSIRA O VALOR: "));
            $despesa->setDDescricao(readline("INSIRA A DESC: "));
            array_push($despesas, $despesa);
            echo "\033[2J\033[1;1H";
            break;

        case 3:
            foreach ($receitas as $r)
                echo $r;
            break;

        case 4:
            foreach ($despesas as $d)
                echo $d;
            break;

        case 5:

            foreach ($receitas as $r) {
                $totalReceitas += $r->getRValor();
            }
            foreach ($despesas as $d) {
                $totalDespesas += $d->getDValor();
            }

            $saldo = $totalReceitas - $totalDespesas;
            echo "TOTAL RECEITAS: " . $totalReceitas . "\n";
            echo "TOTAL DESPESAS: " . $totalDespesas . "\n";
            echo "SALDO: " . $saldo . "\n";
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
