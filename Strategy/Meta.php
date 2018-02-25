<?php 
namespace Percentual;

use Percentual\Atividade;

class Meta{
	
	private $id;
	private $descricao;
	private $atividades;
	
	public function __construct($id,$descricao){
            $this->id = $id;
            $this->descricao = $descricao;
	}
	
	public function getDescricao(){
            return $this->descricao;
	}
	
	public function atribuirAtividade(Atividade $atividade){
            $this->atividades[] = $atividade;
	}
	
	public function getAtividades(){
            return $this->atividades;
	}
	
	public function getQuantidadeAtividades(){
            return count($this->atividades);
	}
	
	public function naoPossuiAtividades(){
            return count($this->atividades) == 0; 
	}
	
}