<?php 
namespace Percentual;

class EstrategiaParaMetasNovas implements EstrategiaDePercentual{
	
    public function calcular(Meta $meta){
        if($meta->naoPossuiAtividades()){
            throw new \Exception("Meta sem atividades. Não pode calcular.");
        }

        $media = 0;
        foreach($meta->getAtividades() as $atividade){
            $media += $atividade->getPercentualConcluido();
        }
        $media = $media / $meta->getQuantidadeAtividades();

        echo "A media da meta {$meta->getDescricao()} eh $media";
    }
}