<?php

class PossuiDinheiroSuficienteValidacao{
	
	public function validar($numeroDaConta,$valorParaSacar){
            if($valorParaSacar <= 50){
                    return true;
            }else{
                    throw new Exception("Nao pode sacar.\n");
            }
	}
	
}