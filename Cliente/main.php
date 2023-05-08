<?php

require "cliente.php";


$cliente1 = new Cliente("João da Silva", "123.456.789-10", "2010-01-01", "Rua A, 123", "joao.silva@email.com", "(11) 1234-5678");


// Testando método verificarMaiorIdade()
if ($cliente1->verificarMaiorIdade()) {
    echo $cliente1->getNome() . " é maior de idade.<br>";
} else
echo $cliente1->getNome() . " é menor de idade.<br>";

$cliente1->imprimir();
?>