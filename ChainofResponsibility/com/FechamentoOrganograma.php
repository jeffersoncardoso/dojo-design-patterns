<?php 
namespace Fechamento;

class FechamentoOrganograma{
	
    public function fecharPeriodo(){
        echo "Fechamento Organograma - Determinando qual eh o organograma de cada servidor\n";				
        $this->proximoFechamento();
    }

    protected function proximoFechamento(){
        return (new FechamentoEntidade())->fecharPeriodo();
    }
	
}


?>