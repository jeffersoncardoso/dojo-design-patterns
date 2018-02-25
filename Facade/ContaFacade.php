<?php

class ContaFacade{
	
    private $numeroDaConta;
    private $senhaDaConta;

    private $numeroDaContaExistenteValidacao;
    private $dadosCorretosValidacao;
    private $possuiDinheiroSuficienteValidacao;	

    private $transferenciaServico;

    public function __construct($numeroDaConta, $senhaDaConta){
        $this->numeroDaConta = $numeroDaConta;
        $this->senhaDaConta = $senhaDaConta;

        $this->numeroDaContaExistenteValidacao = new NumeroDaContaExistenteValidacao();
        $this->dadosCorretosValidacao = new DadosCorretosValidacao();
        $this->possuiDinheiroSuficienteValidacao = new PossuiDinheiroSuficienteValidacao();

        $this->transferenciaServico = new TransferenciaServico();

    }

    public function sacar($valorParaSacar){
        try{
            $this->numeroDaContaExistenteValidacao->validar($this->numeroDaConta);
            $this->dadosCorretosValidacao->validar($this->numeroDaConta, $this->senhaDaConta);
            $this->possuiDinheiroSuficienteValidacao->validar($this->numeroDaConta,$valorParaSacar);

            $this->transferenciaServico->sacar($this->numeroDaConta,$valorParaSacar);	
        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function depositar($valorParaDepositar){
        try{
            $this->numeroDaContaExistenteValidacao->validar($this->numeroDaConta);
            $this->dadosCorretosValidacao->validar($this->numeroDaConta, $this->senhaDaConta);
            $this->possuiDinheiroSuficienteValidacao->validar($this->numeroDaConta,$valorParaDepositar);

            $this->transferenciaServico->depositar($this->numeroDaConta,$valorParaDepositar);
        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }


}