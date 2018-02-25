<?php

class TransferenciaServico{
	
	public function sacar($numeroDaConta,$valorParaSacar){
            echo "R$ $valorParaSacar foi sacado da conta $numeroDaConta \n";
	}
	
	public function depositar($numeroDaConta,$valorParaDepositar){
            echo "R$ $valorParaDepositar foi depositado na conta $numeroDaConta \n";
	}
	
}