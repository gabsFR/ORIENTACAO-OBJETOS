<?php

class Turma{

    private string $nome;
    private string $curso;
    private array $lista;

    public function __construct()
    {
        $this->lista = [];
    }

    public function addAluno($aluno){
        array_push($this->lista, $aluno);
    }

    // geset

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getLista(): array
    {
        return $this->lista;
    }

    public function setLista(array $lista): self
    {
        $this->lista = $lista;

        return $this;
    }
}