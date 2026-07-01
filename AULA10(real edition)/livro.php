<?php

class Livro
{
    private string $titulo;
    private string $autor;
    private string $genero;
    private int $quantPag;
    private float $valorPag;

    public function __toString()
    {
        $dados = "\n\nTITULO: " . $this->titulo . "\n";
        $dados .= "AUTOR: " . $this->autor . "\n";
        $dados .= "GENERO: " . $this->genero . "\n";
        $dados .= "PAGINAS: " . $this->quantPag . "\n";
        $dados .= "VALOR: " . $this->valorPag . "\n";

        return $dados;
    }

    // getiseti

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getQuantPag(): int
    {
        return $this->quantPag;
    }

    public function setQuantPag(int $quantPag): self
    {
        $this->quantPag = $quantPag;

        return $this;
    }

    public function getValorPag(): float
    {
        return $this->valorPag;
    }

    public function setValorPag(float $valorPag): self
    {
        $this->valorPag = $valorPag;

        return $this;
    }
}

$livros = [];
$opcao = 0;

do {

    echo "\n------ MENU -------\n";
    echo "1° INSERIR LIVRO     \n";
    echo "2° LISTAR LIVRO      \n";
    echo "3° BUSCAR LIVRO      \n";
    echo "4° TOTAL GASTO       \n";
    echo "0° SAIR              \n";

    $opcao = readline("ESCOLHA: ");

    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $livro = new Livro;
            $livro -> setTitulo(readline("Diga o titulo do livro: "));
            $livro -> setAutor(readline("Diga o nome do autor: "));
            $livro -> setGenero(readline("Diga o genero do livro: "));
            $livro -> setQuantPag(readline("Diga o total de paginas deste livro: "));
            $livro -> setValorPag(readline("Diga o valor pago neste livro: "));

            array_push($livros, $livro);
            break;

        case 2:
            foreach ($livros as $l) {
                echo $l;
            }
            break;

        case 3:
            $indice = readline("Informe o indice do livro: ");
            if (isset($livros[$indice])) {
                echo "Livro encontrado!";
                echo $livros[$indice];
            }else {
                echo "Livro não encontrado!";
            }
            break;

        case 4:
            $valorTotal = 0;
            foreach ($livros as $l) {
                $valorTotal += $l->getValorPago() ;
            }
            echo "O valor gasto com livros: R$" . $valorTotal . "\n\n";
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }

} while ($opcao != 0);
