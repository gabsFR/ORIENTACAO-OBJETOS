<?php

class livro
{

    private $titulo;
    private $autor;
    private $genero;
    private $numPaginas;

    // metodos
    public function getDados()
    {
        $dados = "TITULO: " . $this->titulo . "\n";
        $dados .=  "AUTOR: " . $this->autor . "\n";
        $dados .=  "GENERO: " . $this->genero . "\n";
        $dados .=  "QUANT: " . $this->numPaginas . "\n";

        return $dados;
    }

    public function __toString()
    {
        $dados = "TITULO: " . $this->titulo . "\n";
        $dados .=  "AUTOR: " . $this->autor . "\n";
        $dados .=  "GENERO: " . $this->genero . "\n";
        $dados .=  "QUANT: " . $this->numPaginas . "\n";

        return $dados;
    }
    // gets e sets

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    public function setNumPaginas($numPaginas): self
    {
        $this->numPaginas = $numPaginas;

        return $this;
    }
}

// main

$livro1 = new Livro();
$livro1->setTitulo(readline("Informe o Título: "));
$livro1->setAutor(readline("Informe o Autor: "));
$livro1->setGenero(readline("Informe o Genero: "));
$livro1->setNumPaginas(readline("Informe as paginas: "));

$livro2 = new Livro();
$livro2->setTitulo(readline("Informe o Título: "));
$livro2->setAutor(readline("Informe o Autor: "));
$livro2->setGenero(readline("Informe o Genero: "));
$livro2->setNumPaginas(readline("Informe as paginas: "));

$livro3 = new Livro();
$livro3->setTitulo(readline("Informe o Título: "));
$livro3->setAutor(readline("Informe o Autor: "));
$livro3->setGenero(readline("Informe o Genero: "));
$livro3->setNumPaginas(readline("Informe as paginas: "));

$livroMaior = $livro1;

if ($livro2->getNumPaginas() > $livroMaior) {
    $livroMaior = $livro2;
}

if ($livro3->getNumPaginas() > $livroMaior) {
    $livroMaior = $livro3;
}

// echo "\n|---Livro com mais paginas---|\n";
// echo "TITULO: " . $livroMaior->getTitulo() . "\n";
// echo "AUTOR: " . $livroMaior->getAutor() . "\n";
// echo "GENERO: " . $livroMaior->getGenero() . "\n";
// echo "QUANT: " . $livroMaior->getNumPaginas() . "\n";

echo $livroMaior;
