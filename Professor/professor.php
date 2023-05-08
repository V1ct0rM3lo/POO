<?php

class Professor {
    private $nome;
    private $disciplina;
    private $salario;

    public function __construct($nome, $disciplina, $salario) {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function atualizarValor($porcentagem) {
        $this->salario *= (1 + $porcentagem/100);
    }

    public function imprimir() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Salario: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}
