<?php 
namespace Fechamento;

include_once "autoload.php";

use Fechamento\Fechamento;
use Fechamento\FechamentoIndividualColetivo;
use Fechamento\FechamentoOrganograma;
use Fechamento\FechamentoEntidade;
use Fechamento\FechamentoMedia;

class FechamentoServico{
	
    public function fecharPeriodo(){
        $fechamentoPai = new Fechamento();
        $fechamentoPai->fecharPeriodo();
    }
}

$fechamento = new FechamentoServico();
$fechamento->fecharPeriodo();

?>