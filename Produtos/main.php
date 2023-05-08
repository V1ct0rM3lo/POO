<?php


require "produtos.php";

$produto1 = new Produto("Celular", "Xiaomi", "Smartphone com tela de 6.5 polegadas", 1500.00);
$produto2 = new Produto("Notebook", "Acer", "Notebook com processador Intel Core i5 e 16GB de RAM  GTX 1650", 3500.00);
$produto3 = new Produto("SmartTV", "Sansung", "Tv 4K gaming Processor", 1200.00);

// atualizarValor()
$produto1->atualizarValor(10); // Aumenta o valor do produto1 em 10%
$produto2->atualizarValor(-5); // Diminui o valor do produto2 em 5%

// imprimir()
$produto1->imprimir();
echo "<br>";
$produto2->imprimir();
echo "<br>";
$produto3->imprimir();