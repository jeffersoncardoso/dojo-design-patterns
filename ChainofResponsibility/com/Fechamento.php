<?php 
namespace Fechamento;

use Fechamento\FechamentoPeriodoEntidade;

class Fechamento{
    
    private $proximoFechamento;
    
    function __construct(FechamentoIndividualColetivo $fechamento) {
        $this->proximoFechamento = $fechamento;
    }

    public function fecharPeriodo(){
        echo "Fechamento Periodo - Iniciando o fechamento \n";
        $this->proximoFechamento();
    }

    protected function proximoFechamento(){
        return $this->proximoFechamento->fecharPeriodo();
    }

	
}
?>