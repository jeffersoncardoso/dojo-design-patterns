<?php 
namespace Fechamento;

class FechamentoIndividualColetivo{
	
    public function fecharPeriodo(){
        echo "Fechamento Servidores - Calculando o percentual dos servidores\n";				
        $this->proximoFechamento();
    }

    protected function proximoFechamento(){
        return (new FechamentoOrganograma())->fecharPeriodo();
    }
}


?>