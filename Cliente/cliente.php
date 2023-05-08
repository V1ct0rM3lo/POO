<?php

class Cliente {
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $endereco;
    private $email;
    private $telefone;

    public function __construct($nome, $cpf, $dataNascimento, $endereco, $email, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function verificarMaiorIdade() {
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($this->dataNascimento);
        $diferencaAnos = $dataNascimento->diff($dataAtual)->y;

        if ($diferencaAnos >= 18) {
            return true;
        } else {
            return false;
        }
    }

    public function imprimir() {
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Data de Nascimento: " . $this->dataNascimento . "<br>";
        echo "Endereço: " . $this->endereco . "<br>";
        echo "E-mail: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
    }

    
}

?>