<?php

class Produto {
    private $nome;
    private $marca;
    private $descricao;
    private $valor;

    public function __construct($nome, $marca, $descricao, $valor) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function atualizarValor($porcentagem) {
        $this->valor *= (1 + $porcentagem/100);
    }

    public function imprimir() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Descrição: " . $this->descricao . "<br>";
        echo "Valor: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
    }
}
