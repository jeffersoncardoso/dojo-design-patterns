<?php
include_once("./ContaFacade.php");
include_once("./DadosCorretosValidacao.php");
include_once("./NumeroDaContaExistenteValidacao.php");
include_once("./PossuiDinheiroSuficienteValidacao.php");
include_once("./TransferenciaServico.php");


//Nº da conta - 111111
//Senha da conta - 12345

$conta = new ContaFacade(111111,12345);
echo $conta->sacar(100);
echo $conta->depositar(15);

