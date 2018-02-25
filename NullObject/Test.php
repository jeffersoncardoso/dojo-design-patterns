<?php
include_once 'autoload.php';

use NullObject\Cliente;
use NullObject\ClienteNulo;

$cliente = new Cliente(10, "Jefferson Cardoso", "037.907.230-02");
$nullCliente = new ClienteNulo();

echo "#####CLIENTE NORMAL#####";
print_r($cliente);

echo "#####CLIENTE NULO#####";
print_r($nullCliente);
echo $nullCliente->getCpf();
echo $nullCliente->getId();
echo $nullCliente->getNome();
