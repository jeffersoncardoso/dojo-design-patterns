<?php
namespace NullObject;

abstract class ClienteAbstrato{

    protected $id;
    protected $nome;
    protected $cpf;
    
    function __construct($id, $nome, $cpf){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }


}