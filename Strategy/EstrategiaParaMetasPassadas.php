<?php 
namespace Percentual;

class EstrategiaParaMetasPassadas implements EstrategiaDePercentual{
	
    public function calcular(Meta $meta){
        echo "\nA media da meta {$meta->getDescricao()} que foi cadastrada pelo usuario eh 100";
    }
}