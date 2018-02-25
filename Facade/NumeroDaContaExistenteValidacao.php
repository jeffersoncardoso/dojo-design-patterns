<?php

class NumeroDaContaExistenteValidacao{
	
	public function validar($numeroDaConta){
            if(is_numeric($numeroDaConta)){
                    return true;
            }else{
                    throw new Exception("Numero da conta invalido.\n");
            }
	}
	
}