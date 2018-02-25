<?php 
namespace Fechamento;

include_once "autoload.php";

use Fechamento\FechamentoIndividualColetivo;
use Fechamento\FechamentoOrganograma;
use Fechamento\FechamentoEntidade;
use Fechamento\FechamentoMedia;

class FechamentoServico{
	
	public function fecharPeriodo(){
		
            $fechamentoPai = new Fechamento();
            $fechamentoIndividualColetivo = new FechamentoIndividualColetivo();
            $fechamentoOrganograma = new FechamentoOrganograma();
            $fechamentoEntidade = new FechamentoEntidade();
            $fechamentoMedia = new FechamentoMedia();

            $fechamentoPai->fecharPeriodo();
            $fechamentoIndividualColetivo->fecharPeriodo();
            $fechamentoOrganograma->fecharPeriodo();
            $fechamentoEntidade->fecharPeriodo();
            $fechamentoMedia->fecharPeriodo();
		
	}
}


$fechamento = new FechamentoServico();
$fechamento->fecharPeriodo();

?>