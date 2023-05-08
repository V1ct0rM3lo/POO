<?php

require "carro.php";

$carro1 = new Carro("Classic", "Cinza", "CPF-7521", 4);
$carro2 = new Carro("Civic", "Grafite", "FDS-1212", 4);

$carro1->ligar();
$carro1->acelerar();
$carro1->frear();
$carro1->acionarSeta("esquerda");

$carro1->set_cor("Amarelo");
echo $carro1->get_cor();

?>