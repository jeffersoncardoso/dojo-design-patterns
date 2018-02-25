<?php 
namespace Fechamento;

class FechamentoEntidade{
	
    public function fecharPeriodo(){
        echo "Fechamento Entidade - Calculando a media das secretarias de canoas\n";				
        $this->proximoFechamento();
    }

    protected function proximoFechamento(){
        return (new FechamentoMedia())->fecharPeriodo();
    }
}


?>