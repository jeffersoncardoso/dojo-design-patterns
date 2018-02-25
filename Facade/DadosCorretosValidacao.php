<?php

class DadosCorretosValidacao{
	
    public function validar($numeroDaConta,$senhaDaConta){
        if($numeroDaConta == 111111 && $senhaDaConta == 12345){
                return true;
        }else{
                throw new Exception("Dados invalidos.\n");
        }
    }
	
}