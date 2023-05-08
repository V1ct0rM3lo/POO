<?php

class Disciplina {
    private $nome;
    private $qtdprof;

    public function __construct($nome, $qtdprof) {
        $this->nome = $nome;
        $this->qtdprof = $qtdprof;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQtdprof() {
        return $this->qtdprof;
    }

    public function setQtdprof($qtdprof) {
        $this->qtdprof = $qtdprof;
    }

    public function imprimir() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Quantidade de Professores: " . $this->qtdprof . "<br>";
       }
}
