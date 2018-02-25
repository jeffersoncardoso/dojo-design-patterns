<?php 
namespace Percentual;

class Atividade{
	
	private $id;
	private $percentualConcluido;
	
	public function __construct($id,$percentualConcluido){
            $this->id = $id;
            $this->percentualConcluido = $percentualConcluido;
	}
	
	public function getPercentualConcluido(){
            return (double)$this->percentualConcluido;
	}
}