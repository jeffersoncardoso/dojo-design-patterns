<?php

namespace Percentual;

class FabricaEstrategia {
    static function determinarEstrategia(Meta $meta){
        if($meta->getAno() == 2015 && $meta->getSemestre() == 1){
            return new EstrategiaParaMetasPassadas();
        }else{
            return new EstrategiaParaMetasNovas();
        }
    }
}
