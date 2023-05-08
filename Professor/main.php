<?php


require "professor.php";

$professor1 = new Professor("Clodoviu", "Matematica", 1500.00);

// atualizarValor()
$professor1->atualizarValor(10); // Aumenta o valor do produto1 em 10%

// imprimir()
$professor1->imprimir();
echo "<br>";